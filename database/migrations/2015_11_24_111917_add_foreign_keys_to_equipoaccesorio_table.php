<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipoaccesorioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipoaccesorio', function(Blueprint $table)
		{
			$table->foreign('equipoaccesorio_ideq_foreign', 'equipoaccesorio_ibfk_1')->references('id')->on('equipo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('equipoaccesorio_idacc_foreign', 'equipoaccesorio_ibfk_2')->references('id')->on('accesorio')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipoaccesorio', function(Blueprint $table)
		{
			$table->dropForeign('equipoaccesorio_ibfk_1');
			$table->dropForeign('equipoaccesorio_ibfk_2');
		});
	}

}

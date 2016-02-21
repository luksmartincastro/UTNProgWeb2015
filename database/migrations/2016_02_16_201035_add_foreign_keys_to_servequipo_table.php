<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServequipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servequipo', function(Blueprint $table)
		{
			$table->foreign('servequipo_ideq_foreign', 'servequipo_ibfk_1')->references('id')->on('equipo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('servequipo_idserv_foreign', 'servequipo_ibfk_2')->references('id')->on('servicio')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('servequipo', function(Blueprint $table)
		{
			$table->dropForeign('servequipo_ibfk_1');
			$table->dropForeign('servequipo_ibfk_2');
		});
	}

}

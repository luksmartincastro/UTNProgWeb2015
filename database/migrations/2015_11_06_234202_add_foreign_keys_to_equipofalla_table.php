<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipofallaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipofalla', function(Blueprint $table)
		{
			$table->foreign('equipofalla_ideq_foreign', 'equipofalla_ibfk_1')->references('id')->on('equipo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('equipofalla_idfallaGen_foreign', 'equipofalla_ibfk_2')->references('id')->on('fallagenerica')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipofalla', function(Blueprint $table)
		{
			$table->dropForeign('equipofalla_ibfk_1');
			$table->dropForeign('equipofalla_ibfk_2');
		});
	}

}

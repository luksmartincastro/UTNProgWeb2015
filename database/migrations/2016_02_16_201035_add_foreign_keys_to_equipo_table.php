<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipo', function(Blueprint $table)
		{
			$table->foreign('equipo_idGama_foreign', 'equipo_ibfk_1')->references('id')->on('gamaequipo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('equipo_idMod_foreign', 'equipo_ibfk_2')->references('id')->on('modelo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('equipo_idOrden_foreign', 'equipo_ibfk_3')->references('id')->on('ordenreparacion')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipo', function(Blueprint $table)
		{
			$table->dropForeign('equipo_ibfk_1');
			$table->dropForeign('equipo_ibfk_2');
			$table->dropForeign('equipo_ibfk_3');
		});
	}

}

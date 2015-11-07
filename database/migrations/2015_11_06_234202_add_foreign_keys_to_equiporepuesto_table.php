<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquiporepuestoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equiporepuesto', function(Blueprint $table)
		{
			$table->foreign('equiporepuesto_ideq_foreign', 'equiporepuesto_ibfk_1')->references('id')->on('equipo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('equiporepuesto_idrep_foreign', 'equiporepuesto_ibfk_2')->references('id')->on('repuesto')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equiporepuesto', function(Blueprint $table)
		{
			$table->dropForeign('equiporepuesto_ibfk_1');
			$table->dropForeign('equiporepuesto_ibfk_2');
		});
	}

}

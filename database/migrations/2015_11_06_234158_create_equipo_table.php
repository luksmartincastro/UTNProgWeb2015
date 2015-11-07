<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('imei', 50)->nullable();
			$table->date('fechaEntrega')->nullable();
			$table->string('estadoReparacion', 50)->nullable();
			$table->string('estadoGarantia', 50)->nullable();
			$table->string('estadoPago', 50)->nullable();
			$table->float('presupEstimado', 10, 0)->nullable();
			$table->float('presupFinal', 10, 0)->nullable();
			$table->timestamps();
			$table->integer('equipo_idGama_foreign')->nullable()->index('equipo_idGama_foreign');
			$table->integer('equipo_idMod_foreign')->nullable();
			$table->integer('equipo_idOrden_foreign')->nullable()->index('equipo_idOrden_foreign');
			$table->index(['equipo_idMod_foreign','equipo_idGama_foreign','equipo_idOrden_foreign'], 'equipo_idMod_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipo');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepuestoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repuesto', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombreRep', 200)->nullable();
			$table->integer('precioVenta')->nullable();
			$table->integer('precioCompra')->nullable();
			$table->integer('puntoReposicion')->nullable();
			$table->integer('stock')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('repuesto');
	}

}

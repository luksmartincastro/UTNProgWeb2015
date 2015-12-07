<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdenreparacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordenreparacion', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('numFactura')->nullable();
			$table->string('tipoFactura', 1)->nullable();
			$table->string('apeNom', 100)->nullable();
			$table->string('telefono', 50)->nullable();
			$table->float('anticipo', 10, 0)->nullable();
			$table->text('observacion', 65535)->nullable();
			$table->timestamps();
			$table->integer('ordenreparacion_idCliMay_foreign')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ordenreparacion');
	}

}

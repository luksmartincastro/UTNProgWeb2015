<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSelconfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('selconfig', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('razonSocial', 45)->nullable();
			$table->string('responsable', 45)->nullable();
			$table->string('direccion', 45)->nullable();
			$table->string('iva', 45)->nullable();
			$table->string('cuit', 15)->nullable();
			$table->string('ingBrutos', 5)->nullable();
			$table->date('inicioActividades')->nullable();
			$table->string('telefono', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->integer('cupoReparacion')->nullable();
			$table->integer('garantiaComun')->nullable();
			$table->integer('garantiaMayorista')->nullable();
			$table->string('sloganNegocio', 500)->nullable();
			$table->string('Banco', 100)->nullable();
			$table->integer('selconfig_idloc_foreign')->nullable()->index('selconfig_idloc_foreign');
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
		Schema::drop('selconfig');
	}

}

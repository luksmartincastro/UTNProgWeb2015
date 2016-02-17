<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departamento', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombreDepartamento', 100)->nullable();
			$table->timestamps();
			$table->integer('departamento_idProvincia_foreign')->nullable()->index('departamento_idProvincia_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('departamento');
	}

}

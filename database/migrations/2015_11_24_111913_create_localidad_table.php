<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localidad', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombreLocalidad', 50)->nullable();
			$table->integer('localidad_idDep_foreign')->nullable()->index('localidad_idDep_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('localidad');
	}

}

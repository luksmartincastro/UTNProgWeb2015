<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModeloTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modelo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombreModelo', 100)->nullable();
			$table->integer('modelo_idmarca_foreign')->nullable()->index('modelo_idmarca_foreign');
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
		Schema::drop('modelo');
	}

}

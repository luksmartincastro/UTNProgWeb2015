<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColaboradorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colaborador', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('idColaborador')->nullable();
			$table->integer('descuento')->nullable();
			$table->integer('colacorador_idsel_foreign')->nullable()->index('colacorador_idsel_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colaborador');
	}

}

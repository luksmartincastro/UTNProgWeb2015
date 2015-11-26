<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicio', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombreServicio', 100);
			$table->timestamps();
			$table->integer('servicio_idsel_foreign')->nullable()->index('servicio_idsel_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicio');
	}

}

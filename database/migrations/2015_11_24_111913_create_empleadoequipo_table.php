<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpleadoequipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleadoequipo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('informeTecnico', 65535)->nullable();
			$table->timestamps();
			$table->integer('empleadoequipo_idUser_foreign')->unsigned()->nullable()->index('empleadoequipo_idUser_foreign');
			$table->integer('empleadoequipo_ideq_foreign')->nullable()->index('empleadoequipo_ideq_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empleadoequipo');
	}

}

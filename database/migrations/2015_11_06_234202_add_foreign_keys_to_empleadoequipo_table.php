<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmpleadoequipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('empleadoequipo', function(Blueprint $table)
		{
			$table->foreign('empleadoequipo_ideq_foreign', 'empleadoequipo_ibfk_2')->references('id')->on('equipo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('empleadoequipo_idUser_foreign', 'empleadoequipo_ibfk_3')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('empleadoequipo', function(Blueprint $table)
		{
			$table->dropForeign('empleadoequipo_ibfk_2');
			$table->dropForeign('empleadoequipo_ibfk_3');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLocalidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('localidad', function(Blueprint $table)
		{
			$table->foreign('localidad_idDep_foreign', 'localidad_ibfk_1')->references('id')->on('departamento')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('localidad', function(Blueprint $table)
		{
			$table->dropForeign('localidad_ibfk_1');
		});
	}

}

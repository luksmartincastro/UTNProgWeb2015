<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDepartamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('departamento', function(Blueprint $table)
		{
			$table->foreign('departamento_idProvincia_foreign', 'departamento_ibfk_1')->references('id')->on('provincia')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('departamento', function(Blueprint $table)
		{
			$table->dropForeign('departamento_ibfk_1');
		});
	}

}

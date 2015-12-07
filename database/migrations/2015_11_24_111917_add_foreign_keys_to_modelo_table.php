<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToModeloTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('modelo', function(Blueprint $table)
		{
			$table->foreign('modelo_idmarca_foreign', 'modelo_ibfk_1')->references('id')->on('marca')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('modelo', function(Blueprint $table)
		{
			$table->dropForeign('modelo_ibfk_1');
		});
	}

}

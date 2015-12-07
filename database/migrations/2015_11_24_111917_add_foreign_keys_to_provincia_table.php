<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProvinciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('provincia', function(Blueprint $table)
		{
			$table->foreign('provincia_idPais_foreign', 'provincia_ibfk_1')->references('id')->on('pais')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('provincia', function(Blueprint $table)
		{
			$table->dropForeign('provincia_ibfk_1');
		});
	}

}

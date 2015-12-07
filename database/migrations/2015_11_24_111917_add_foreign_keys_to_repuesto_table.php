<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRepuestoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('repuesto', function(Blueprint $table)
		{
			$table->foreign('repuesto_idMod_foreign', 'repuesto_ibfk_1')->references('id')->on('modelo')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('repuesto', function(Blueprint $table)
		{
			$table->dropForeign('repuesto_ibfk_1');
		});
	}

}

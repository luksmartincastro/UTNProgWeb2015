<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServicioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servicio', function(Blueprint $table)
		{
			$table->foreign('servicio_idsel_foreign', 'servicio_ibfk_1')->references('id')->on('selconfig')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('servicio', function(Blueprint $table)
		{
			$table->dropForeign('servicio_ibfk_1');
		});
	}

}

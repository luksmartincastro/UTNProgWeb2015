<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquiposelconfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equiposelconfig', function(Blueprint $table)
		{
			$table->foreign('equiposelconfig_ideq_foreign', 'equiposelconfig_ibfk_1')->references('id')->on('equipo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('equiposelconfig_idsel_foreign', 'equiposelconfig_ibfk_2')->references('id')->on('selconfig')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equiposelconfig', function(Blueprint $table)
		{
			$table->dropForeign('equiposelconfig_ibfk_1');
			$table->dropForeign('equiposelconfig_ibfk_2');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSelconfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('selconfig', function(Blueprint $table)
		{
			$table->foreign('selconfig_idloc_foreign', 'selconfig_ibfk_1')->references('id')->on('localidad')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('selconfig', function(Blueprint $table)
		{
			$table->dropForeign('selconfig_ibfk_1');
		});
	}

}

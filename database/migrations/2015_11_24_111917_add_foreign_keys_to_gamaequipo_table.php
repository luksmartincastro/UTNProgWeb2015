<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGamaequipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gamaequipo', function(Blueprint $table)
		{
			$table->foreign('gamaequipo_idsel_foreign', 'gamaequipo_ibfk_1')->references('id')->on('selconfig')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gamaequipo', function(Blueprint $table)
		{
			$table->dropForeign('gamaequipo_ibfk_1');
		});
	}

}

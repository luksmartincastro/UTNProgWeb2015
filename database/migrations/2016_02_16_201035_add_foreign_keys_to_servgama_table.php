<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServgamaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servgama', function(Blueprint $table)
		{
			$table->foreign('servgama_idserv_foreign', 'servgama_ibfk_1')->references('id')->on('servicio')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('servgama_idgam_foreign', 'servgama_ibfk_2')->references('id')->on('gamaequipo')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('servgama', function(Blueprint $table)
		{
			$table->dropForeign('servgama_ibfk_1');
			$table->dropForeign('servgama_ibfk_2');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToColaboradorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('colaborador', function(Blueprint $table)
		{
			$table->foreign('colacorador_idsel_foreign', 'colaborador_ibfk_1')->references('id')->on('selconfig')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('colaborador', function(Blueprint $table)
		{
			$table->dropForeign('colaborador_ibfk_1');
		});
	}

}

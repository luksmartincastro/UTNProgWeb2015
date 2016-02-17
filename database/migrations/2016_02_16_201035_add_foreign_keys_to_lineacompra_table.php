<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLineacompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lineacompra', function(Blueprint $table)
		{
			$table->foreign('lineacompra_idcompra_foreign', 'lineacompra_ibfk_1')->references('id')->on('compra')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('lineacompra_idrep_foreign', 'lineacompra_ibfk_2')->references('id')->on('repuesto')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lineacompra', function(Blueprint $table)
		{
			$table->dropForeign('lineacompra_ibfk_1');
			$table->dropForeign('lineacompra_ibfk_2');
		});
	}

}

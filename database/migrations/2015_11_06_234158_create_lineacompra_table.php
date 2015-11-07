<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineacompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lineacompra', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cantidad')->nullable();
			$table->float('subtotal', 10, 0)->nullable();
			$table->timestamps();
			$table->integer('lineacompra_idrep_foreign')->nullable();
			$table->integer('lineacompra_idcompra_foreign')->nullable()->index('lineacompra_idcompra_foreign');
			$table->index(['lineacompra_idrep_foreign','lineacompra_idcompra_foreign'], 'lineacompra_idrep_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lineacompra');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquiporepuestoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equiporepuesto', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamps();
			$table->integer('equiporepuesto_ideq_foreign')->nullable();
			$table->integer('equiporepuesto_idrep_foreign')->nullable()->index('equiporepuesto_idrep_foreign');
			$table->index(['equiporepuesto_ideq_foreign','equiporepuesto_idrep_foreign'], 'equiporepuesto_ideq_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equiporepuesto');
	}

}

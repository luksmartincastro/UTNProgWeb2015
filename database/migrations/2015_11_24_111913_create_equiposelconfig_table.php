<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquiposelconfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equiposelconfig', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('equiposelconfig_ideq_foreign')->nullable();
			$table->integer('equiposelconfig_idsel_foreign')->nullable()->index('equiposelconfig_idsel_foreign');
			$table->index(['equiposelconfig_ideq_foreign','equiposelconfig_idsel_foreign'], 'equiposelconfig_ideq_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equiposelconfig');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipoaccesorioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipoaccesorio', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('identidicador', 100)->nullable();
			$table->timestamps();
			$table->integer('equipoaccesorio_ideq_foreign')->nullable();
			$table->integer('equipoaccesorio_idacc_foreign')->nullable()->index('equipoaccesorio_idacc_foreign');
			$table->index(['equipoaccesorio_ideq_foreign','equipoaccesorio_idacc_foreign'], 'equipoaccesorio_ideq_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipoaccesorio');
	}

}

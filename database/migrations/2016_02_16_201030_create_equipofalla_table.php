<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipofallaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipofalla', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('usaRepuesto', 1)->nullable();
			$table->timestamps();
			$table->integer('equipofalla_ideq_foreign')->nullable();
			$table->integer('equipofalla_idfallaGen_foreign')->nullable()->index('equipofalla_idfallaGen_foreign');
			$table->index(['equipofalla_ideq_foreign','equipofalla_idfallaGen_foreign'], 'equipofalla_ideq_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipofalla');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServequipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servequipo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamps();
			$table->integer('servequipo_ideq_foreign')->nullable();
			$table->integer('servequipo_idserv_foreign')->nullable()->index('servequipo_idserv_foreign');
			$table->index(['servequipo_ideq_foreign','servequipo_idserv_foreign'], 'servequipo_ideq_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servequipo');
	}

}

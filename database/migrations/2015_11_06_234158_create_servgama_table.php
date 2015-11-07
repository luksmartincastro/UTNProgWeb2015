<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServgamaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servgama', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('costoserv')->nullable();
			$table->timestamps();
			$table->integer('servgama_idserv_foreign')->nullable();
			$table->integer('servgama_idgam_foreign')->nullable()->index('servgama_idgam_foreign');
			$table->index(['servgama_idserv_foreign','servgama_idgam_foreign'], 'servgama_idserv_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servgama');
	}

}

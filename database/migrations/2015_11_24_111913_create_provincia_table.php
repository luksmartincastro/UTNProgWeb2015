<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProvinciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provincia', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombreProvincia', 100)->nullable();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('updated_up')->default('0000-00-00 00:00:00');
			$table->integer('provincia_idPais_foreign')->nullable()->index('provincia_idPais_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provincia');
	}

}

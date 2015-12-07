<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistorialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historial', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('evento', 50)->nullable();
			$table->text('descripcionFalla', 65535)->nullable();
			$table->timestamps();
			$table->integer('historial_ideq_foreign')->nullable()->index('historial_ideq_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historial');
	}

}

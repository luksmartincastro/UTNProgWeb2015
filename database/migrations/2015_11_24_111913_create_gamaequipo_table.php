<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamaequipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gamaequipo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombreGama', 50)->nullable();
			$table->text('descripcion', 65535)->nullable();
			$table->integer('costoManoObra')->nullable();
			$table->timestamps();
			$table->integer('gamaequipo_idsel_foreign')->nullable()->index('gamaequipo_idsel_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gamaequipo');
	}

}

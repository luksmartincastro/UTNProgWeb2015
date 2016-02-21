<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoequipomarcaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipoequipomarca', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamps();
			$table->integer('tipoequipomarca_idmarca_foreign')->nullable()->index('tipoequipomarca_idmarca_foreign');
			$table->integer('tipoequipomarca_idTipoEq_foreign')->nullable()->index('tipoequipomarca_idTipoEq_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipoequipomarca');
	}

}

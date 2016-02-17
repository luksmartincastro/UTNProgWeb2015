<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoequipomarcaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipoequipomarca', function(Blueprint $table)
		{
			$table->foreign('tipoequipomarca_idmarca_foreign', 'tipoequipomarca_ibfk_1')->references('id')->on('marca')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('tipoequipomarca_idTipoEq_foreign', 'tipoequipomarca_ibfk_2')->references('id')->on('tipoequipo')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipoequipomarca', function(Blueprint $table)
		{
			$table->dropForeign('tipoequipomarca_ibfk_1');
			$table->dropForeign('tipoequipomarca_ibfk_2');
		});
	}

}

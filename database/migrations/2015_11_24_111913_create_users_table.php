<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('dni')->nullable();
			$table->date('fechaNac')->nullable();
			$table->string('domicilio', 200)->nullable();
			$table->integer('fechaIngreso')->nullable();
			$table->string('cuil', 11);
			$table->integer('cuentaBanco');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('users_idCat_foreign')->nullable()->index('users_idCat_foreign');
			$table->integer('users_idSel_foreign')->nullable()->index('users_idSel_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

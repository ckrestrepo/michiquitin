<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTercerosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('terceros', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('cedula')->unique();
			$table->string('nombre', 255);
			$table->string('direccion', 255)->nullable();
			$table->string('telefono', 255)->nullable();
			$table->string('email', 255)->nullable();
			$table->string('estado', 255)->default('ACTIVO');
			$table->string('notas', 1000)->nullable();
			$table->integer('user_id')->unsigned();

			$table->foreign('user_id')
					->references('id')->on('users')
					->onDelete('NO ACTION')
					->onUpdate('CASCADE');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('terceros');
	}

}

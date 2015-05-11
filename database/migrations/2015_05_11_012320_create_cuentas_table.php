<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cuentas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('tercero_id')->unsigned();
			$table->string('banco', 255);
			$table->string('tipo', 255);
			$table->string('numero', 255);
			$table->integer('user_id')->unsigned();

			$table->foreign('tercero_id')
					->references('id')->on('terceros')
					->onDelete('NO ACTION')
					->onUpdate('CASCADE');

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
		Schema::drop('cuentas');
	}

}

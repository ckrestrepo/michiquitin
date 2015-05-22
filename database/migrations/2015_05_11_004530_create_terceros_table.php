<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTercerosTable extends Migration {

	public function up()
	{
		Schema::create('terceros', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('nit')->unique();
			$table->string('nombre', 255);
			$table->string('estado', 255)->default('ACTIVO');
            $table->double('abonos');
            $table->double('saldo');
			$table->string('notas', 1000)->nullable();

			$table->timestamps();
		});
	}

	/*public function down()
	{
		Schema::drop('terceros');
	}*/

}

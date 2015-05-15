<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration {


	public function up()
	{
		Schema::create('cuentas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('tercero_id')->unsigned();
            $table->string('nombre',30);
			$table->string('banco', 255);
			$table->string('tipo', 255);
			$table->string('numero', 255);

			$table->foreign('tercero_id')
					->references('id')->on('terceros')
					->onDelete('NO ACTION')
					->onUpdate('CASCADE');

			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('cuentas');
	}

}

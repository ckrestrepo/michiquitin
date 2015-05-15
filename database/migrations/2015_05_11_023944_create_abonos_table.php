<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonosTable extends Migration {

	public function up()
	{
		Schema::create('abonos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('cartera_id')->unsigned();
			$table->integer('cuenta_id')->unsigned()->nullable();
			$table->string('forma_pago');
			$table->decimal('monto', 16, 2)->unsigned();
			$table->string('notas', 1000)->nullable();
			
			$table->foreign('cartera_id')
					->references('id')->on('carteras')
					->onDelete('NO ACTION')
					->onUpdate('CASCADE');

			$table->foreign('cuenta_id')
					->references('id')->on('cuentas')
					->onDelete('NO ACTION')
					->onUpdate('CASCADE');

			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('abonos');
	}

}

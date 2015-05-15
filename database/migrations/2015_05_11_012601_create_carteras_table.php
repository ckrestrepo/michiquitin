<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarterasTable extends Migration {


	public function up()
	{
		Schema::create('carteras', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('nombre', 100); // nombre del cliente
			$table->string('factura', 10); // identificacion de la factura
            $table->double('saldo_anterior');
            $table->double('saldo_restante');
            $table->date('proximo_pago');
			$table->integer('tercero_id')->unsigned();

			$table->foreign('tercero_id')
					->references('id')->on('terceros')
					->onDelete('NO ACTION')
					->onUpdate('CASCADE');

			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('carteras');
	}

}

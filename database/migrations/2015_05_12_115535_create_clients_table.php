<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('nombre')->required();
            $table->string('cedula')->required();
            $table->string('producto_comprado')->required();
            $table->string('email')->unique()->required();
            $table->string('direccion')->required();
            $table->string('telefono')->nullable();
            $table->enum('tipo',['empresa','particular'])->default('particular');
            $table->string('registro')->nullable();
            $table->double('saldo_anterior')->nullable();
            $table->double('monto_abonado')->nullable();
            $table->date('proximo_pago')->nullable();
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}

}

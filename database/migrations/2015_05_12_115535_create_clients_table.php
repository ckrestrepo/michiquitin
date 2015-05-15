<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('full_name')->required();
            $table->string('email')->unique()->required();
            $table->string('address')->required();
            $table->string('phone_number')->nullable();
            $table->enum('type',['empresa','particular'])->default('particular');
            $table->string('register')->nullable();
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}

}

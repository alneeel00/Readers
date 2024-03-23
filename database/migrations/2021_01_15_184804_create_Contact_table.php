<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactTable extends Migration {

	public function up()
	{
		Schema::create('Contact', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('Name');
			$table->string('mobile');
        	$table->text('message')->nullable();
			$table->string('email')->unique();
		});
	}

	public function down()
	{
		Schema::drop('Contact');
	}
}

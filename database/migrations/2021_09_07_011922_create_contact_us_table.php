<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactUsTable extends Migration {

	public function up()
	{
		Schema::create('contact_us', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 120);
			$table->string('email', 120);
			$table->string('message', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contact_us');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->string('service_name', 120);
			$table->string('description', 120);
			$table->string('image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionTable extends Migration {

	public function up()
	{
		Schema::create('region', function(Blueprint $table) {
			$table->increments('id');
			$table->string('region_name', 120);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('region');
	}
}

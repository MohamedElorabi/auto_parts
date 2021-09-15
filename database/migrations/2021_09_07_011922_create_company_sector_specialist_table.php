<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanySectorSpecialistTable extends Migration {

	public function up()
	{
		Schema::create('company_sector_specialist', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 120);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('company_sector_specialist');
	}
}
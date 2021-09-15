<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyInfoTable extends Migration {

	public function up()
	{
		Schema::create('company_info', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('activity_type_id')->unsigned();
			$table->string('facility_name');
			$table->string('owners_number');
			$table->date('date');
			$table->string('commercial_register_image');
			$table->integer('bank_account_number');
            $table->integer('region_id')->unsigned();
			$table->string('city', 120);
			$table->enum('agent_company', array('نعم', 'لا'));
            $table->enum('authorized_distributor', array('نعم', 'لا'));
			$table->integer('company_sector_specialist_id')->unsigned();
			$table->enum('other_branches', array('نعم', 'لا'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('company_info');
	}
}

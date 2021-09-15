<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{

        Schema::table('company_info', function(Blueprint $table) {
			$table->foreign('activity_type_id')->references('id')->on('activity_types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

		Schema::table('company_info', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('company_info', function(Blueprint $table) {
			$table->foreign('company_sector_specialist_id')->references('id')->on('company_sector_specialist')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('company_info', function(Blueprint $table) {
			$table->foreign('region_id')->references('id')->on('region')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

        Schema::table('new_branches', function(Blueprint $table) {
			$table->foreign('region_id')->references('id')->on('region')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
        Schema::table('company_info', function(Blueprint $table) {
			$table->dropForeign('company_info_activity_type_id_foreign');
		});
		Schema::table('company_info', function(Blueprint $table) {
			$table->dropForeign('company_info_user_id_foreign');
		});
		Schema::table('company_info', function(Blueprint $table) {
			$table->dropForeign('company_info_company_sector_specialist_id_foreign');
		});
		Schema::table('company_info', function(Blueprint $table) {
			$table->dropForeign('company_info_region_id_foreign');
		});

        Schema::table('new_branches', function(Blueprint $table) {
			$table->dropForeign('new_branches_region_id_foreign');
		});


	}
}

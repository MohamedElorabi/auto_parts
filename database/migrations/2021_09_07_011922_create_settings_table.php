<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
            $table->text('about', 255);
			$table->text('privacy_policy', 255);
			$table->text('user_agreement', 255);
			$table->text('help_center');
			$table->string('facebook_url', 120);
			$table->string('instagram_url', 120);
			$table->string('snap_chat_url', 120);
			$table->string('twitter_url', 120);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}

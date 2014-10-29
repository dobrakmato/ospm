<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('username', 255);
			$table->string('email', 255);
			$table->string('displayname', 255);
			$table->integer('role_id')->unsigned()->index()->default('0');
			$table->timestamp('last_logged_in');
			$table->integer('metadata_id')->unsigned()->index();
			$table->string('password', 64);
			$table->string('remember_token', 100);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}
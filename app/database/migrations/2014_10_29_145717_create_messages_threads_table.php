<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesThreadsTable extends Migration {

	public function up()
	{
		Schema::create('messages_threads', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('messages_threads');
	}
}
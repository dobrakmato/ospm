<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('author_id')->unsigned()->index();
			$table->integer('thread_id')->unsigned()->index();
			$table->string('content', 1024)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}
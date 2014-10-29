<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksCommentsTable extends Migration {

	public function up()
	{
		Schema::create('tasks_comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('task_id')->unsigned()->index();
			$table->integer('author_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('tasks_comments');
	}
}
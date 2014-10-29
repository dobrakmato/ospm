<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('tasks_categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
		});
	}

	public function down()
	{
		Schema::drop('tasks_categories');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	public function up()
	{
		Schema::create('tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->enum('status', array('new', 'confirmed', 'assigned', 'resolved', 'closed'));
			$table->string('tags', 255)->nullable();
			$table->integer('votes')->nullable()->default('0');
			$table->timestamp('target_date');
			$table->text('description')->nullable();
			$table->text('reproduction')->nullable();
			$table->enum('type', array('bug', 'proposal', 'task', 'enhancement'));
			$table->integer('project_id')->unsigned()->index();
			$table->integer('category_id')->unsigned()->index();
			$table->integer('author_id')->unsigned()->index();
			$table->integer('assignedto_id')->unsigned()->index();
			$table->smallInteger('priority')->default('1');
			$table->integer('milestone_id')->unsigned()->nullable()->index();
			$table->string('title', 127);
		});
	}

	public function down()
	{
		Schema::drop('tasks');
	}
}
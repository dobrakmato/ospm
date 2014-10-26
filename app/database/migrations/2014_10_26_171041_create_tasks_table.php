<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function ($table) {
			// All tasks
			$table->increments('id');
			$table->enum('status', array('new', 'confirmed', 'assinged', 'resolved', 'closed'));
			$table->integer('assinged')->unsigned();
			$table->integer('author')->unsigned();
			$table->integer('category')->unsigned();
			$table->integer('project')->unsigned();
			$table->tinyInteger('priority')->unsigned();
			$table->string('tags');
			$table->text('description');
			$table->integer('votes')->unsigned();
			$table->timestamp('target_date');
			$table->string('visibility');
			$table->timestamps();
			
			// Bugs
			$table->string('platform');
			$table->string('affected_versions');
			$table->text('reproduction');
			$table->string('fixedin_version');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}

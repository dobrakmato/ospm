<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('abbr', 5);
			$table->integer('leader_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}
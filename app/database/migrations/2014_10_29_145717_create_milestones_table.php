<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMilestonesTable extends Migration {

	public function up()
	{
		Schema::create('milestones', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 127);
			$table->timestamp('target_date');
		});
	}

	public function down()
	{
		Schema::drop('milestones');
	}
}
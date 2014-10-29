<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWhiteboardsTable extends Migration {

	public function up()
	{
		Schema::create('whiteboards', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
		});
	}

	public function down()
	{
		Schema::drop('whiteboards');
	}
}
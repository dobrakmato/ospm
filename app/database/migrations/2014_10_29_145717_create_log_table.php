<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogTable extends Migration {

	public function up()
	{
		Schema::create('log', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('type', 16);
			$table->string('title', 127);
			$table->string('content', 255)->nullable();
			$table->string('visibility', 512)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('log');
	}
}
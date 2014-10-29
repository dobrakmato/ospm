<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetadatasTable extends Migration {

	public function up()
	{
		Schema::create('metadatas', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('content', 2048)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('metadatas');
	}
}
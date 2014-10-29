<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveysElementsTable extends Migration {

	public function up()
	{
		Schema::create('surveys_elements', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type', 16);
			$table->string('title', 64);
			$table->integer('survey_id')->unsigned()->index();
			$table->string('description', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('surveys_elements');
	}
}
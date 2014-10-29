<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveysResponsesTable extends Migration {

	public function up()
	{
		Schema::create('surveys_responses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('survey_id')->unsigned()->index();
			$table->text('response');
		});
	}

	public function down()
	{
		Schema::drop('surveys_responses');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveysTable extends Migration {

	public function up()
	{
		Schema::create('surveys', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('project_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('surveys');
	}
}
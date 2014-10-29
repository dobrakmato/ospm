<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTable extends Migration {

	public function up()
	{
		Schema::create('documents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('content')->nullable();
			$table->boolean('uploaded')->default(false);
			$table->string('filename', 255)->nullable();
			$table->integer('author_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('documents');
	}
}
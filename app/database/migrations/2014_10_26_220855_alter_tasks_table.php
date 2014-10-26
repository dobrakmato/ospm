<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE `tasks` MODIFY `platform` VARCHAR(255) NULL;');
		DB::statement('ALTER TABLE `tasks` MODIFY `affected_versions` VARCHAR(255) NULL;');
		DB::statement('ALTER TABLE `tasks` MODIFY `reproduction` TEXT NULL;');
		DB::statement('ALTER TABLE `tasks` MODIFY `fixedin_version` VARCHAR(255) NULL;');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

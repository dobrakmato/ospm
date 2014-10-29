<?php

class TaskTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('tasks')->delete();

		// task 1
		Task::create(array(
				'status' => 'new',
				'tags' => 'tag1,testtag,tagging,nice',
				'votes' => 23,
				'description' => 'description of problem',
				'reproduction' => 'we cant reproduce the problem',
				'type' => 'bug',
				'priority' => 3,
				'milestone_id' => 1,
				'title' => 'title of task'
			));
	}
}
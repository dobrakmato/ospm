<?php

class TasksTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('tasks')->delete();
		Task::create(array(
			'status' => 'confirmed',
			'assinged' => 1,
			'author' => 1,
			'category' => 0,
			'project' => 1,
			'priority' => 8,
			'tags' => 'test,tagov,tag2,tag88',
			'description' => 'velmi vazny problem nastava casto',
			'title' => 'velmi vazny problem',
			'votes' => 553,
			'visibility' => 'all',
		));
		User::create(array(
			'username' => 'dobrakmato',
			'displayname'    => 'Matej Kormuth',
			'password' => Hash::make('kormuth'),
		));
	}

}
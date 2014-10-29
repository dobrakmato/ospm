<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();


		$this->call('RoleTableSeeder');
		$this->command->info('Role table seeded!');
		
		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('TaskTableSeeder');
		$this->command->info('Task table seeded!');
	}
}
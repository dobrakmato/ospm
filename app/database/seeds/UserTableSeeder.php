<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->delete();

		// admin
		User::create(array(
				'username' => 'admin',
				'email' => 'admin@test.com',
				'displayname' => 'Administrator',
				'role_id' => 1,
				'password' => Hash::make('password')
			));
	}
}
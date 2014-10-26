<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'username' => 'dobrakmato',
			'displayname'    => 'Matej Kormuth',
			'password' => Hash::make('kormuth'),
		));
	}

}
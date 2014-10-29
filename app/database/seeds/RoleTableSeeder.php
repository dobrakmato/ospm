<?php

class RoleTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('roles')->delete();

		// Administrator
		Role::create(array(
				'name' => 'Administrator',
				'slug' => 'admin'
			));
	}
}
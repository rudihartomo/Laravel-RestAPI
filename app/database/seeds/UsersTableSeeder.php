<?php
/**
* 
*/
class UsersTableSeeder extends Seeder
{
	public function run()
	{
		User::create([
			'email' => 'admin@rest.api',
			'password' => Hash::make('password')
		]);
	}
}
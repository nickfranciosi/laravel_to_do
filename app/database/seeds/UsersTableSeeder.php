<?php 



class UsersTableSeeder extends Seeder {



	public function run(){

		User::truncate();

		User::create([

			'username' => 'nick',
			'email' => 'nickfranciosi@gmail.com',
			'password' => '1234'
		]);

		User::create([

			'username' => 'lucy',
			'email' => 'lucymkane@gmail.com',
			'password' => '1234'
		]);
	}
}
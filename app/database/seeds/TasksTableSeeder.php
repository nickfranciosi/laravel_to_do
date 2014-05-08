<?php 


class TasksTableSeeder extends Seeder{


	public function run(){


		Task::create([

			'title' => 'Yardwork',
			'body' => 'mow the grass',
			'completed' => 0,
			'user_id' => '1'
		]);


		Task::create([

			'title' => 'Yardwork',
			'body' => 'hedge the bushes',
			'completed' => 0,
			'user_id' => '2'
		]);
	}
}
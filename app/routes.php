<?php

// Event::listen('illuminate.query', function($query){
// 	var_dump($query);
// });



Route::get('/',['as' => 'home', 'uses' => 'TasksController@index'] );

Route::post('/tasks', 'TasksController@store');

Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', 'UserTasksController@index');

Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);

// Route::get('{username}/tasks', function($username){

// 		$user =  User::where('username', $username)->first();

// 		return $user->tasks;


// });



// Route::get('{username}/tasks/{id}', function($username, $id){

// 	$user = User::with('tasks')->where('username', $username)->first();
// 	$task = $user->tasks;

// 	return View::make('tasks.show', compact('task', 'user'));
// });
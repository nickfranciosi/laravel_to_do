<?php


class TasksController extends BaseController
{

	public function index(){

		$tasks = Task::with('user')->get();
		

		return View::make('tasks.index', compact('tasks'));
	}


	public function show($id){

		$task = Task::findOrFail($id);

		return View::make('tasks.show', compact('task'));
	}


}
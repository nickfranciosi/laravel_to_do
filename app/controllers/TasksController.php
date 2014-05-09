<?php


use  Acme\Services\TaskCreatorService;

class TasksController extends BaseController
{

	protected $taskCreator;

	public function __construct(TaskCreatorService $taskCreator)
	{
		$this->taskCreator = $taskCreator;

	}

	public function index(){

		$tasks = Task::with('user')->get();
		$users = User::lists('username','id');

		return View::make('tasks.index', compact('tasks', 'users'));
	}


	public function show($id){

		$task = Task::findOrFail($id);

		return View::make('tasks.show', compact('task'));
	}


	public function store(){

		
		try
		{
			$this->taskCreator->make(Input::all());
		} catch (Acme\Validators\ValidationException $e)
		{
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}

		return Redirect::home();
	}

}
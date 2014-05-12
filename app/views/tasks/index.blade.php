@extends('layouts.master')


@section('content')
	<div id="taskList">
	<h2>All User Tasks</h2>

	<ul class="list-group">
		@foreach ($tasks as $task)
			<li class="list-group-item {{ $task->completed ? 'completed' : ''}}">
			<a href="/{{$task->user->username}}/tasks">{{gravatar_include($task->user->email)}}</a>
				
			{{ link_to_route('user.tasks.show',$task->title, [$task->user->username, $task->id] )}}

			{{ Form::model($task, array('id'=>'taskUpdateForm','method' => 'PATCH', 'route' => ['tasks.update', $task->id])) }}
				{{ Form::checkbox('completed') }}
				{{ Form::submit('Update') }}
			{{ Form::close() }}

			</li>
		@endforeach
	</ul>
	</div>
	<div id="taskForm">
		@if (isset($users))
			<h3>Add New Task</h3>

			@include('tasks.partials._form')
		@endif
	</div>
@stop
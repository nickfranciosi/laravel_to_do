@extends('layouts.master')


@section('content')

	<h2>All User Tasks</h2>

	<ul class="list-group">
		@foreach ($tasks as $task)
			<li class="list-group-item">
			<a href="{{$task->user->username}}/tasks">{{gravatar_include($task->user->email)}}</a>
				
			{{ link_to_route('user.tasks.show',$task->title, [$task->user->username, $task->id] )}}
			</li>
		@endforeach
	</ul>

	@if (isset($users))
		<h3>Add New Task</h3>

		@include('tasks.partials._form')
	@endif
@stop
@extends('layouts.master')


@section('content')

	<h2>All User Tasks</h2>

	<ul class="list-group">
		@foreach ($tasks as $task)
			<li class="list-group-item">
			{{gravatar_include($task->user->email)}}
				{{ link_to("tasks/$task->id",$task->title)}}

			</li>
		@endforeach
	</ul>
@stop
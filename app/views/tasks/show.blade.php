@extends('layouts.master')


@section('content')
	
	<h1>{{$task->title}}</h1>

	<article>{{$task->body}}</article>

	{{ link_to('/', 'Go Back')}}

@stop

@extends('templates.master')
@section('content')

<p>
	@foreach($tasks as $task)
	{{ $taskList->url }}

	{{ $task->body }}
	@endforeach
</p>

@stop
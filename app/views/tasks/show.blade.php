@extends('templates.master')
@section('content')

<div class="jumbotron">
  <h1>Awesome!</h1>
  <h3>Now add more tasks to the list.</h3>
</div>

<p>
	@foreach($tasks as $task)
	<h3>{{ $task->body }}</h3>
	@endforeach

	{{ Form::open(['action' => ['TasksController@edit', $taskList->url]]) }}
	<fieldset>
		{{ Form::text('body', '', ['placeholder' => 'e.g. Remember the milk', 'class' => 'span7', 'id' => 'edit-tasklist']) }}
		<div>
			{{ Form::submit('Add task to list', ['class' => 'btn btn-create btn-success btn-large']) }}
		</div>
	</fieldset>
	{{ Form::close() }}

</p>

@stop
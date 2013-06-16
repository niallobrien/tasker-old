@extends('templates.master')
@section('content')

<p>
	{{ Form::open(['route' => 'tasks.store']) }}
	<fieldset>
		{{ Form::text('body', '', ['placeholder' => 'e.g. Remember the milk', 'class' => 'span7', 'id' => 'task']) }}
		<div>
			{{ Form::submit('Create & Share', ['class' => 'btn btn-create btn-success btn-large']) }}
		</div>
	</fieldset>
	{{ Form::close() }}
</p>

@stop
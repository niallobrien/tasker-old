@extends('templates.master')
@section('content')

<div class="jumbotron">
  <h1>Create and share a task list.</h1>
</div>

<p>
@include('tasks._form')
</p>

@stop
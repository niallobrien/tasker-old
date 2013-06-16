@extends('templates.master')
@section('content')

<h1>Task-list not found.</h1>
<h3>Redirecting...</h3>
<?php header('Refresh: 2; URL=' . URL::to( Request::root() ) . ''); ?>

@stop
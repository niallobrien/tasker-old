<?php

// Route root to create a new task
Route::get('/', function()
{
	return View::make('tasks.create');
});

// Access short url of task-list
Route::get('{url?}', ['uses' => 'TasksController@show']);


// Task resource
Route::resource('tasks', 'TasksController');

// Handle 404s
App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});


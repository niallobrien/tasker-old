<?php

// Task resource
Route::resource('tasks', 'TasksController');

// Route root to create a new task
Route::get('/', function()
{
	return Redirect::route('tasks.create');
});
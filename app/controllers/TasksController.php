<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('tasks.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tasks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		// First create a new tasklist
		$taskList = new TaskList;

		// Generate a unique short URL for the tasklist
		$taskList->url = $taskList->shortenUrl();

		$taskList->save();

		// Create the new task with input
		$task = new Task( Input::all() );

		// Associate the new task with the tasklist
		$task = $taskList->tasks()->save($task);

		return Redirect::action('TasksController@show', [$taskList->url]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $url
	 * @return Response
	 */
	public function show($url)
	{
		$taskList = TaskList::where('url', '=', $url)->first();
		if(!$taskList) {
			App::abort(404, 'Task-list not found');
		}
		$tasks = $taskList->tasks;
		return View::make('tasks.show', compact('taskList', 'tasks'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($url)
	{
		// Get the current tasklist
		$taskList = TaskList::where('url', '=', $url)->first();

		// Create the new task with input
		$task = new Task( Input::all() );

		// Associate the new task with the tasklist
		$task = $taskList->tasks()->save($task);

		return Redirect::action('TasksController@show', [$taskList->url]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
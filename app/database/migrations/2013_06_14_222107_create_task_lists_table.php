<?php

use Illuminate\Database\Migrations\Migration;

class CreateTaskListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_lists', function($table)
		{
		    $table->increments('id');
		    $table->string('url');
		    $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('task_lists');
	}

}
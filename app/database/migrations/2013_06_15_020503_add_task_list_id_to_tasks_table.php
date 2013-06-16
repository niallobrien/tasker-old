<?php

use Illuminate\Database\Migrations\Migration;

class AddTaskListIdToTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tasks', function($table)
		{
			$table->integer('task_list_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tasks', function($table)
		{
		    $table->dropColumn('task_list_id');
		});
	}

}
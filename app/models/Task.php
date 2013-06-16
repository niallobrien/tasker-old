<?php
class Task extends Eloquent {
	protected $fillable = ['body', 'completed'];

	public function taskList()
	{
		return $this->belongsTo('TaskList');
	}
}
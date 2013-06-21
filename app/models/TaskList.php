<?php

class TaskList extends Eloquent {

	protected $fillable = ['url'];

	public function tasks()
	{
		return $this->hasMany('Task');
	}

	public function shortenUrl()
		{
			$shortened = base_convert(rand(10000,99999), 10, 36);
			if ( $this->shortened) {
				return $this->shortenUrl();
			}

			return $shortened;
		}
}
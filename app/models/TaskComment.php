<?php

class TaskComment extends Eloquent {

	protected $table = 'tasks_comments';
	public $timestamps = true;

	public function task()
	{
		return $this->belongsTo('Task', 'task_id');
	}

	public function author()
	{
		return $this->belongsTo('User', 'author_id');
	}

}
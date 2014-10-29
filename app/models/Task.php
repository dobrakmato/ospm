<?php

class Task extends Eloquent {

	protected $table = 'tasks';
	public $timestamps = true;

	public function project()
	{
		return $this->belongsTo('Project', 'project_id');
	}

	public function category()
	{
		return $this->hasOne('TaskCategory', 'id');
	}

	public function comments()
	{
		return $this->hasMany('TaskComment');
	}

	public function author()
	{
		return $this->belongsTo('User', 'author_id');
	}

	public function assignedTo()
	{
		return $this->belongsTo('User', 'assignedto_id');
	}

	public function milestone()
	{
		return $this->belongsTo('Milestone', 'milestone_id');
	}

}
<?php

class Milestone extends Eloquent {

	protected $table = 'milestones';
	public $timestamps = true;

	public function tasks()
	{
		return $this->hasMany('Task');
	}

}
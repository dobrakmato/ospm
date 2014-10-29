<?php

class Project extends Eloquent {

	protected $table = 'projects';
	public $timestamps = true;

	public function surveys()
	{
		return $this->hasMany('Survey');
	}

	public function leader()
	{
		return $this->hasOne('User', 'leader_id');
	}

}
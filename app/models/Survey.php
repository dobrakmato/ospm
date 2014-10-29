<?php

class Survey extends Eloquent {

	protected $table = 'surveys';
	public $timestamps = true;

	public function project()
	{
		return $this->hasOne('Project', 'project_id');
	}

	public function responses()
	{
		return $this->hasMany('SurveyResponse');
	}

	public function elements()
	{
		return $this->hasMany('SurveyElement');
	}

}
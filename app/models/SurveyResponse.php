<?php

class SurveyResponse extends Eloquent {

	protected $table = 'surveys_responses';
	public $timestamps = true;

	public function survey()
	{
		return $this->hasOne('Survey', 'survey_id');
	}

}
<?php

class SurveyElement extends Eloquent {

	protected $table = 'surveys_elements';
	public $timestamps = false;

	public function survey()
	{
		return $this->belongsTo('Survey', 'survey_id');
	}

}
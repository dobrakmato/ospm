<?php
class SurveysController extends BaseController {
	public function view($hash)
	{
		return View::make('surveys.view_1', array('fields' => $fields));
	}
}

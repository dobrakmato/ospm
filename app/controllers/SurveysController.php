<?php
class SurveysController extends AdminController {

	public function index()
	{
		return View::make('surveys.list');
	}
	
	public function create() 
	{
		return View::make('surveys.create');
	}
	
	public function remove($id)
	{
		return View::make('surveys.remove');
	}
}

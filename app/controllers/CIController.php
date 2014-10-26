<?php

class CIController extends AdminController {

	public function index()
	{
		return View::make('ci.main');
	}
	
	public function builds()
	{
		
	}
}

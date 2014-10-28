<?php

class SystemController extends BaseController {
	public function projects()
	{
		return View::make('system.projects');
	}
	
	public function users()
	{
		return View::make('system.users');
	}
}

<?php

class CalendarController extends AdminController {

	public function index()
	{
		return View::make('calendar.main');
	}
}

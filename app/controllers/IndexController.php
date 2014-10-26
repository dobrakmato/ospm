<?php
class IndexController extends AdminController {

	public function index()
	{
		return View::make('index.main');
	}
}

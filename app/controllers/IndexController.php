<?php
class IndexController extends AdminController {

	public function index() {
		return View::make('index.main');
	}
	
	public function set($what) {
		if($what == "ajax") {
			Session::set('ajax', !Session::get('ajax', false));
			return "AJAX is now " . Session::get('ajax');
		}
	}
}

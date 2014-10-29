<?php
class WhiteboardsController extends AdminController {
	public function index() {
		return View::make('whiteboards.index');
	}
	
	public function create() {
		return Redirect::action('WhiteboardsController@join', array('id' => mt_rand(1000000, 9999999)));
	}
	
	public function session($id, $sessionkey) {
		return Response::make('Whiteboards not avaiable', 500);
	}
	
	public function join($id) {
		return View::make('whiteboards.join');
	}
}
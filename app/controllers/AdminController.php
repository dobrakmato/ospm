<?php

class AdminController extends Controller {
	public function __construct()
	{
		$this->beforeFilter(function() {
			if (Auth::guest()) {
				return Redirect::action('LoginController@showLogin', array('cb' => action(Route::currentRouteAction())));
			}
		});
	}
}

<?php

class LoginController extends BaseController {
	
	public function showLogin()
	{
		return View::make("login.login", Input::all());
	}
	
	public function doLogin() 
	{
		$userdata = array(
			'username' 	=> Input::get('username'),
			'password' 	=> Input::get('password')
		);
		
		// attempt to do the login
		if (Auth::attempt($userdata)) {
			if(Input::has('cb')) {
				return Redirect::to(Input::get('cb'));
			} else {
				return Redirect::action('IndexController@index');
			}
		} else {
			return Redirect::action('LoginController@showLogin')->withInput(Input::except('password'));
		}
	}
	
	public function logout() 
	{
		Auth::logout();
		return Redirect::action('LoginController@showLogin');
	}
	
	public function showRegister()
	{
		return View::make("login.register", Input::all());
	}
	
	public function doRegister()
	{
		// validate the info, create rules for the inputs
		$rules = array(
				'username'    => 'required',
				'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);
		
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		
		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::action('LoginController@showLogin')
			->withErrors($validator) // send back all errors to the login form
			->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {	
		
		}
		return View::make("login.register");
	}
}

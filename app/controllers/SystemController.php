<?php

class SystemController extends AdminController {
	public function projects() {
		$projects = Project::all();
		return View::make('system.projects', array('projects' => $projects));
	}
	
	public function users() {
		$users = User::all();
		return View::make('system.users', array('users' => $users));
	}
	
	public function settings() {
		$settings = new stdClass();
		return View::make('system.settings', array('settings' => $settings));
	}
}

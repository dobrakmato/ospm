<?php
class MilestonesController extends AdminController {
	public function index() {
		$milestones = Milestone::all();
		return View::make('milestones.index', array('milestones' => $milestones));
	}
	
	public function view($id) {
		$milestone = Milestone::find($id);
		return View::make('milestones.view', array('milestone' => $milestone));
	}
}
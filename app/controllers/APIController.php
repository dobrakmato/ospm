<?php

class APIController extends BaseController {

	public function get($item, $id)
	{
		if($item == 'task') {
			return $this->viewTask($id);
		} else {
			return "{error:'Wrong request!'}";
		}
	}
	
	public function viewTask($id)
	{
		return Task::find($id)->toJson();
	}
}

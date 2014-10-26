<?php
class TasksController extends AdminController {
	public function index()
	{
		$tasks = Task::all(array('title', 'id', 'status', 'target_date', 'votes', 'assinged', 'priority'));
		return View::make('tasks.main', array('tasks' => $tasks));
	}
	
	public function create()
	{
		return View::make('tasks.create');
	}
	
	public function remove()
	{
		return View::make('tasks.remove');
	}
	
	public function update()
	{
		return View::make('tasks.update');
	}
	
	public function view($id)
	{
		$task = Task::find($id);
		return View::make('tasks.view', array('task' => $task));
	}
}

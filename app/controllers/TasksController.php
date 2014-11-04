<?php
class TasksController extends AdminController {
	public function index()
	{
		$tasks = Task::all();
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
	
	public function edit($id)
	{
		$task = Task::find($id);
		return View::make('tasks.edit', array('task' => $task));
	}
	
	public function filter($by, $cond)
	{
		$tasks = Task::where($by, '=', $cond)->get();
		return View::make('tasks.main', array('tasks' => $tasks));
	}
	
	public function view($id)
	{
		$task = Task::find($id);
		$comments = $task->comments()->getResults();
		return View::make('tasks.view', array('task' => $task, 'comments' => $comments));
	}
}

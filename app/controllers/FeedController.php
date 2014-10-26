<?php
class FeedController extends AdminController {

	public function index()
	{
		// Get items
		$items = array();
		
		$task1 = new stdClass();
		$task1->type = 'task';
		$task1->title = 'Urobit frajerku';
		$task1->project = 'FRAJERKA';
		$task1->category = 'uncategorized';
		$task1->content = 'Nam arcu libero, laoreet ut eleifend dapibus, pretium ut purus. Mauris interdum amet.';
		$task1->date = '28.10.2014';
		$task1->taskid = 362;
		
		$task1->actions['primary'] = array('url' => action('TasksController@view', array('id' => $task1->taskid)), 'title' => 'Details');
		
		$items[] = $task1;
		
		for($i = 0; $i < 6; $i++) {
			$post = new stdClass();
			$post->type = 'text';
			$post->content = 'Feed item number #' . $i;
			$items[] = $post;
		}
			
		return View::make('feed.main', array("items" => $items));
	}
}

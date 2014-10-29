<?php
class MessagesController extends AdminController {
	public function inbox() {
		$threads = Auth::user()->chatThreads();
		return View::make('messages.inbox', array('threads' => $threads));
	}
	
	public function compose() {
		if(Input::has('title') && Input::has('content') && Input::has('recipients')) {
			/*$thread = MessageThread::create(array(
				'title' => Input::get('title')
			));
			
			$thread_id = $thread->id;
			
			Message::create(array(
				'author_id' => Auth::user()->id,
				'thread_id' => $thread_id,
				'content' => Input::get('content')
			));*/
			
			$users = array();
			foreach(Input::get('recipients') as $recipient) {
				Debugbar::info('recp:' . $recipient);
			}
			
			/*$thread->members()->saveMany($members);*/
			
			//return Redirect::action('MessagesController@thread', array('id' => $thread_id));
			return View::make('messages.inbox', array('threads' => null));
		}
		
		$users = User::all()->lists('displayname');
		return View::make('messages.compose', array('users' => $users));
	}
	
	public function thread($id) {
		$thread = MessageThread::find($id);
		$messages = $thread->messages();
		return View::make('messages.thread', array('thread' => $thread, 'mesages' => $messages));
	}
}
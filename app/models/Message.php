<?php

class Message extends Eloquent {

	protected $table = 'messages';
	public $timestamps = true;

	public function thread()
	{
		return $this->hasOne('MessageThread', 'thread_id');
	}

	public function author()
	{
		return $this->hasOne('User', 'author_id');
	}

}
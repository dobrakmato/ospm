<?php

class MessageThread extends Eloquent {

	protected $table = 'messages_threads';
	public $timestamps = true;

	public function members()
	{
		return $this->hasMany('User');
	}

	public function messages()
	{
		return $this->hasMany('Message');
	}

}
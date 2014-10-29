<?php

use Illuminate\Auth\UserInterface;
class User extends Eloquent implements UserInterface {
	use Illuminate\Auth\UserTrait;

	protected $table = 'users';
	public $timestamps = true;

	public function chatThreads()
	{
		return $this->hasMany('MessageThread', 'thread_id');
	}

	public function tasks()
	{
		return $this->hasMany('Task', 'task_id');
	}

	public function role()
	{
		return $this->hasOne('Role', 'role_id');
	}

	public function metadata()
	{
		return $this->hasOne('Metadata', 'metadata_id');
	}

}
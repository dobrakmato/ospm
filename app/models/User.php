<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	public function id()
	{
		return $this->id;
	}
	
	public function username()
	{
		return $this->username;
	}
	
	public function displayName()
	{
		return $this->displayname;
	}
	
	public function tasks()
	{
		return $this->hasMany('Task');
	}
	
	/**
	 * Get the date the post was created.
	 *
	 * @param \Carbon|null $date
	 * @return string
	 */
	public function date($date=null)
	{
		if(is_null($date)) {
			$date = $this->created_at;
		}
	
		return String::date($date);
	}
	
	/**
	 * Get the task's created at date.
	 */
	public function created_at() 
	{
		return $this->date($this->created_at);
	}
	
	/**
	 * Get the task's updated at date.
	 */
	public function updated_at()
	{
		return $this->date($this->updated_at);
	}
}

<?php

class TaskCategory extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks_categories';
	
	/**
	 * @return slug
	 */
	public function slug()
	{
		return $this->slug;
	}
	
	/**
	 * @return name
	 */
	public function name()
	{
		return $this->name;
	}
}

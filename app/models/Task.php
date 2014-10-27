<?php

use Symfony\Component\Console\Helper\FormatterHelper;
use Whoops\Exception\Formatter;
class Task extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';
	
	public function id()
	{
		return $this->id;
	}
	
	/**
	 * Get the task's author.
	 *
	 * @return User
	 */
	public function author()
	{
		return $this->belongsTo('User', 'author')->getResults();
	}
	
	/**
	 * Get the task's author.
	 *
	 * @return User
	 */
	public function authorDisplayName()
	{
		$user = $this->belongsTo('User', 'author')->getResults();
		return $user->displayName();
	}
	
	/**
	 * 
	 * @return User
	 */
	public function assingedTo()
	{
		return $this->belongsTo('User', 'assinged')->getResults();
	}
	
	/**
	 *
	 * @return User
	 */
	public function assingedToDisplayName()
	{
		$user = $this->belongsTo('User', 'assinged')->getResults();
		return $user->displayName();
	}
	
	/**
	 * @return status (textual representation of enum)
	 */
	public function status()
	{
		return $this->status;
	}
	
	/**
	 * @return the title
	 */
	public function title()
	{
		return $this->title;
	}
	
	/**
	 * 
	 * @return TaskCategory
	 */
	public function category()
	{
		return $this->belongsTo('TaskCategory', 'category')->getResults();
	}
	
	/**
	 *
	 * @return TaskCategory
	 */
	public function categoryName()
	{
		$category = $this->category();
		return $category->name();
	}
	
	/**
	 * 
	 * @return Project
	 */
	public function project()
	{
		return $this->belongsTo('Project', 'project');
	}
	
	/**
	 * @return priority (int 0-9(255))
	 */
	public function priority()
	{
		return $this->priority;
	}
	
	/**
	 * @return array of tags
	 */
	public function tags()
	{
		return explode(',', $this->tags);
	}
	
	/**
	 * @return the description
	 */
	public function description()
	{
		return $this->description;
	}
	
	/**
	 * @return count of votes
	 */
	public function votes()
	{
		return $this->votes;
	}
	
	public function visibility()
	{
		return $this->visibility;
	}
	
	/**
	 * @return date target date
	 */
	public function target_date()
	{
		return $this->date($this->target_date);
	}
	
	/**
	 * @return the platform configuration
	 */
	public function platform()
	{
		return $this->platform;
	}
	
	/**
	 * 
	 * @return array of affected versions
	 */
	public function affected_versions()
	{
		return explode(",", $this->affected_versions);
	}
	
	/**
	 * @return reproduction steps (string)
	 */
	public function reproduction()
	{
		return $this->reproduction;
	}
	
	/**
	 * @return version task is adressed
	 */
	public function fixedin_version()
	{
		return $this->fixedin_version;
	}
	
	/**
	 * Get the task's comments.
	 *
	 * @return array
	 */
	public function comments()
	{
		return $this->hasMany('TaskComment');
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
	
		return $date;
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

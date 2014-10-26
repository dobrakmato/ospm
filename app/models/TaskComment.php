<?php

class TaskComment extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks_comments';
	
	/**
	 * Get the comment's content.
	 *
	 * @return string
	 */
	public function content()
	{
		return nl2br($this->content);
	}
	
	/**
	 * Get the comment's author.
	 *
	 * @return User
	 */
	public function author()
	{
		return $this->belongsTo('User', 'user_id');
	}
	
	/**
	 * Get the comment's task's.
	 *
	 * @return Task
	 */
	public function task()
	{
		return $this->belongsTo('Task');
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
	 * Returns the date of the blog post creation,
	 * on a good and more readable format :)
	 *
	 * @return string
	 */
	public function created_at()
	{
		return $this->date($this->created_at);
	}
}

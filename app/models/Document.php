<?php

class Document extends Eloquent {

	protected $table = 'documents';
	public $timestamps = true;

	public function author()
	{
		return $this->hasOne('User', 'author_id');
	}

}
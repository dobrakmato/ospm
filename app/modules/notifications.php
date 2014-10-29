<?php
/*
 * Notifications module by dobrakmato.
 */

class Notifications {
	/**
	 * Records notification on specified user.
	 * @param Notification $notification notification
	 * @param User $user user
	 */
	public static function push(Notification $notification, User $user) {
		
	}
}

class Notification {
	protected $title;
	protected $content;
	
	/**
	 * Creates new notifications
	 * @param string $title title
	 * @param string $content content (body)
	 */
	public function __construct($title, $content) {
		$this->title = $title;
		$this->content = $content;
	}
}

//ModuleEngine::registerTopbar($action, $display, $icon);
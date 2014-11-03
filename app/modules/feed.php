<?php 
/*
 * Feed module by dobrakmato.
 */

// Routing
ModuleEngine::any('/feed', 'FeedController@index');
ModuleEngine::any('/feed/ajax/{page}', 'FeedController@ajax');

// App hooks
ModuleEngine::registerSidebar('FeedController@index', "Feed", 'mdi-action-view-stream');
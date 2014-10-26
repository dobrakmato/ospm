<?php 
/*
 * Feed module by dobrakmato.
 */

// Routing
ModuleEngine::any('/feed', 'FeedController@index');

// App hooks
ModuleEngine::registerSidebar('FeedController@index', "Feed", 'img/house.png');
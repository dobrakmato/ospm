<?php 
/*
 * Milestones module by dobrakmato.
 */

// Routing
ModuleEngine::any('/milestones', 'MilestonesController@index');
ModuleEngine::any('/milestones/{id}', 'MilestonesController@view');

// App hooks
ModuleEngine::registerSidebar('MilestonesController@index', "Milestones", 'img/cake.png');
<?php 
/*
 * Milestones module by dobrakmato.
 */

// Routing
ModuleEngine::any('/milestones', 'MilestonesController@index');

// App hooks
ModuleEngine::registerSidebar('MilestonesController@index', "Milestones");
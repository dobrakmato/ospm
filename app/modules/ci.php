<?php 
/*
 * Continous integration module by dobrakmato.
 */

// Routing
ModuleEngine::any('/ci', 'CIController@index');
ModuleEngine::any('/ci/builds', 'CIController@builds');

// App hooks
ModuleEngine::registerSidebar('CIController@index', "Continous integration", 'img/computer.png');
ModuleEngine::registerSidebar('CIController@builds', "Builds", 'img/compress.png');
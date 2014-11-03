<?php 
/*
 * Continous integration module by dobrakmato.
 */

// Routing
ModuleEngine::any('/ci', 'CIController@index');
ModuleEngine::any('/ci/builds', 'CIController@builds');

// App hooks
ModuleEngine::registerSidebar('CIController@index', "Continous integration", 'mdi-action-extension');
ModuleEngine::registerSidebar('CIController@builds', "Builds", 'mdi-action-dns');
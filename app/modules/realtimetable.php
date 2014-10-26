<?php
/*
 * Real time tables module by dobrakmato.
*/

// Routing
ModuleEngine::any('/rttable', 'RealTimeTableController@index');
ModuleEngine::any('/rttable/create', 'RealTimeTableController@create');
ModuleEngine::any('/rttable/join/{id}', 'RealTimeTableController@join');

// App hooks
ModuleEngine::registerSidebar('RealTimeTableController@index', "Whiteboards");
ModuleEngine::registerSidebar('RealTimeTableController@create', "Create whiteboard");
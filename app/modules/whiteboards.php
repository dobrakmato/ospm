<?php
/*
 * Whiteboards (Real time tables) module by dobrakmato.
*/

// Routing
ModuleEngine::any('/whiteboards', 'WhiteboardsController@index');
ModuleEngine::any('/whiteboards/create', 'WhiteboardsController@create');
ModuleEngine::any('/whiteboards/join/{id}', 'WhiteboardsController@join');
ModuleEngine::any('/whiteboards/session/{id}/{sessionid}', 'WhiteboardsController@session');
ModuleEngine::any('/whiteboards/ajax/{id}/{sessionid}', 'WhiteboardsController@ajax');

// App hooks
ModuleEngine::registerSidebar('WhiteboardsController@index', "Whiteboards", 'img/image.png');
ModuleEngine::registerSidebar('WhiteboardsController@create', "Create whiteboard", 'img/image_add.png');
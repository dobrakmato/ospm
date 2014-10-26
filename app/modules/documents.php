<?php
/*
 * Document module by dobrakmato.
*/

// Routing
ModuleEngine::any('/documents', 'DocumentsController@index');
ModuleEngine::any('/documents/create', 'DocumentsController@create');
ModuleEngine::any('/documents/upload', 'DocumentsController@upload');
ModuleEngine::any('/documents/view/{hash}', 'DocumentsController@view');

// App hooks
ModuleEngine::registerSidebar('DocumentsController@index', "View documents", 'img/page_white_stack.png');
ModuleEngine::registerSidebar('DocumentsController@index', "Create document", 'img/page_white_add.png');
ModuleEngine::registerSidebar('DocumentsController@index', "Upload document", 'img/page_white_get.png');
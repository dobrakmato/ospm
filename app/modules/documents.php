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
ModuleEngine::registerSidebar('DocumentsController@index', "View documents", 'mdi-action-description');
ModuleEngine::registerSidebar('DocumentsController@index', "Create document", 'mdi-action-note-add');
ModuleEngine::registerSidebar('DocumentsController@index', "Upload document", 'mdi-file-file-upload');
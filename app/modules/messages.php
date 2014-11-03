<?php
/*
 * Messages module by dobrakmato.
 */

// Routing
ModuleEngine::any('/messages/inbox', 'MessagesController@inbox');
ModuleEngine::any('/messages/compose', 'MessagesController@compose');
ModuleEngine::any('/messages/thread/{id}', 'MessagesController@thread');

// App hooks
ModuleEngine::registerSidebar('MessagesController@inbox', "Inbox", 'mdi-content-inbox');
ModuleEngine::registerSidebar('MessagesController@compose', "Write message", 'mdi-content-mail');
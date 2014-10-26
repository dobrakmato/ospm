<?php
/*
 * Messages module by dobrakmato.
*/

// Routing
ModuleEngine::any('/messages/inbox', 'MessagesController@inbox');
ModuleEngine::any('/messages/compose', 'MessagesController@compose');

// App hooks
ModuleEngine::registerSidebar('MessagesController@inbox', "Inbox", 'img/email_open.png');
ModuleEngine::registerSidebar('MessagesController@compose', "Write message", 'img/email_edit.png');
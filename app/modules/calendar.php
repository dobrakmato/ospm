<?php 
/*
 * Calendar module by dobrakmato.
 */

// Routing
ModuleEngine::any('/calendar', 'CalendarController@index');
ModuleEngine::any('/calendar/{year}/{month}', 'CalendarController@month');
ModuleEngine::any('/calendar/{year}/{month}/{day}', 'CalendarController@month');


// App hooks
ModuleEngine::registerSidebar('CalendarController@index', "Calendar", 'mdi-action-event');
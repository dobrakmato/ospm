<?php 
/*
 * Calendar module by dobrakmato.
 */

// Routing
ModuleEngine::any('/calendar', 'CalendarController@index');

// App hooks
ModuleEngine::registerSidebar('CalendarController@index', "Calendar", 'img/calendar.png');
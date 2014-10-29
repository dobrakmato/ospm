<?php
/*
 * Tasks module by dobrakmato.
*/

// Routing
ModuleEngine::any('/tasks', 'TasksController@index');
ModuleEngine::any('/tasks/create', 'TasksController@create');
ModuleEngine::any('/tasks/remove/{id}', 'TasksController@remove');
ModuleEngine::any('/tasks/edit/{id}', 'TasksController@edit');
ModuleEngine::any('/tasks/view/{id}', 'TasksController@view');
ModuleEngine::any('/tasks/filter/{by}/{cond}', 'TasksController@filter');

// App hooks
ModuleEngine::registerSidebar('TasksController@index', "Tasks", 'img/book_open.png');
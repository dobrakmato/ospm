<?php 
/*
 * Surveys module by dobrakmato.
 */

// Routing
ModuleEngine::any('/surveys/create', 'SurveysController@create');
ModuleEngine::any('/surveys', 'SurveysController@index');
ModuleEngine::any('/surveys/remove/{id}', 'SurveysController@remove');
ModuleEngine::any('/surveys/view/{hash}', 'SurveysController@view');

// App hooks
ModuleEngine::registerSidebar('SurveysController@create', "Create survey", 'img/script_add.png');
ModuleEngine::registerSidebar('SurveysController@index', "List surveys", 'img/script.png');
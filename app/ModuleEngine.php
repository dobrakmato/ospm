<?php
class ModuleEngine
{
	protected static $sidebarItems = array();
	
	public static function loadModules()
	{
		Debugbar::info("Loading modules...");
		$files = array_diff(scandir(app_path().'/modules/'), array('.', '..'));
		foreach ($files as $file) {
			Debugbar::info("Loading module " . $file);
			require_once app_path() . '/modules/' . $file;
		}
	}
	
	public static function getSidebarItems() 
	{
		return ModuleEngine::$sidebarItems;
	}
	
	public static function registerSidebar($action, $display, $icon = null)
	{
		ModuleEngine::$sidebarItems[] = array(0 => $action, 1 => $display, 2 => $icon);
	}
	
	public static function get($uri, $action) {
		Route::any($uri, $action);
	}
	
	public static function post($uri, $action) {
		Route::post($uri, $action);
	}
	
	public static function any($uri, $action) {
		Route::any($uri, $action);
	}
}
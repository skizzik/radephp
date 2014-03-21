<?php
	
	define('APP_DIR', 'app');
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(__FILE__));
	define('ASSETS_DIR', 'assets');
	define('CONTROLLERS', ROOT . DS . 'app/controllers' . DS);
	define('LIBS', ROOT . DS . 'app/libs' . DS);
	define('ROUTE', ROOT . DS . 'config' . DS . 'routes.php');
	define('APP_CONFIG', ROOT . DS . 'config' . DS . 'app.php');
	define('CONFIG_DB', ROOT . DS . 'config' . DS . 'config.php');
	$_SERVER['app'] = ROOT;

	require(APP_CONFIG);
	$app = new AppInfo();
	define('WWW_ROOT', $app->url_app . ASSETS_DIR . DS);
	require(APP_DIR . DS . ASSETS_DIR . DS . 'index.php');
	require(CONFIG_DB);
	require(ROOT . DS . APP_DIR . DS . 'helpers/global_functions.php');
	
	require(ROUTE);
?>
<?php
	//define("ROOT","/".basename(dirname(__FILE__)));
	define('APP_DIR', 'app');
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(__FILE__));
	define('ASSETS_DIR', 'assets');
	define('WWW_ROOT', $_SERVER['REQUEST_URI']. APP_DIR . DS . ASSETS_DIR . DS);
	define('CONTROLLERS', ROOT . DS . 'app/controllers' . DS);
	define('LIBS', ROOT . DS . 'app/libs' . DS);
	define('ROUTE', ROOT . DS . 'config' . DS . 'routes.php');
	define('APP_CONFIG', ROOT . DS . 'config' . DS . 'app.php');
	define('CONFIG_DB', ROOT . DS . 'config' . DS . 'config.php');
	require(APP_DIR . DS . ASSETS_DIR . DS . 'index.php');
	require(APP_CONFIG);
	require(CONFIG_DB);
	require(ROOT . DS . APP_DIR . DS . 'helpers/load_helper.php');
	require(ROOT . DS . APP_DIR . DS . 'helpers/global_functions.php');
	require(ROUTE);

	
?>
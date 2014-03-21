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
	DEFINE('HTTP_TYPE', isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http');
	DEFINE('HTTP_ROOT', $_SERVER['HTTP_HOST']);
	DEFINE('BASE_URL', HTTP_TYPE . "://" . HTTP_ROOT . substr(__DIR__, strlen($_SERVER[ 'DOCUMENT_ROOT' ])) . '/');
	DEFINE('WWW_ROOT', BASE_URL . APP_DIR. DS . ASSETS_DIR . DS);

	require(APP_CONFIG);
	require(APP_DIR . DS . ASSETS_DIR . DS . 'index.php');
	require(CONFIG_DB);
	require(ROOT . DS . APP_DIR . DS . 'helpers/global_functions.php');
	require(ROUTE);
?>
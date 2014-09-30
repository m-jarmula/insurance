<?php

ini_set('display_errors', 'on');
define('BASE_DIR', dirname(__DIR__));
define('ASSETS_DIR', __DIR__ . '/assets');
set_include_path(get_include_path() . PATH_SEPARATOR . BASE_DIR . '/App/Controller');
set_include_path(get_include_path() . PATH_SEPARATOR . BASE_DIR . '/App/Model');
set_include_path(get_include_path() . PATH_SEPARATOR . BASE_DIR . '/App/View');
set_include_path(get_include_path() . PATH_SEPARATOR . BASE_DIR . '/App/lib');

function __autoload($class) {
    $class = str_replace('_', '/', $class);
    include_once $class . '.php';
}

$router = new Core_Router();
$dispatcher = Core_Singleton::getSingleton('Core_Dispatcher');
$dispatcher->dispatch();
?>

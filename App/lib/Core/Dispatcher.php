<?php

class Core_Dispatcher {

    protected $router;

    public function __construct() {
        $this->router = Core_Singleton::getSingleton('Core_Router');
    }

    public function dispatch() {
        $controller = ucfirst($this->router->getController()) . 'Controller';
        $action = $this->router->getAction();
        $params = $this->router->getParams();
        $controller = new $controller;
        $controller->$action();
    }

}

?>

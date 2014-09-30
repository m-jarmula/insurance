<?php
class Core_Router{
    
protected $route = array();
public function __construct(){
    $this->setRoute();
}
public function setRoute(){
    $url = isset($_GET['_url']) ? trim($_GET['_url'],'/') : 'index/index';
    $route = explode('/',$url);
    $this->route = $route;
}
public function getController(){
    return $this->route[0];
}
public function getAction(){
    $action = isset($this->route[1]) ? $this->route[1] : 'index';
    return $action;
}
public function getParams(){
    $params = $this->route;
    array_shift($params);
    array_shift($params);
    return $params;
}

}

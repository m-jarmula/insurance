<?php

class AppController {

    public function render($route, $args = null) {
        !is_null($args) ? extract($args) : false;
        include_once 'layout.php';
    }

    public function fetch($file) {
        include_once ucfirst($file) . '.php';
    }

    public function loadModel($model) {
        $model = ucfirst($model . 'Model');
        return new $model;
    }

}

?>

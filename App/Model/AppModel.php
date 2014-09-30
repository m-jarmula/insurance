<?php

class AppModel {

    protected $dbObject;

    public function __construct() {
        $this->setDbObject();
    }

    public function setDbObject() {
        $this->dbObject = Core_Singleton::getSingleton('Core_Db')->getConnection();
    }

    public function getDbObject() {
        return $this->dbObject;
    }

}
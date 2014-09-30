<?php

class Core_Db {

    private $_driver;

    public function __construct() {
        $this->setDriver();
    }

    public function setDriver() {
        $this->_driver = array(
            'db' => 'mysql',
            'host' => 'localhost',
            'dbname' => 'insurance',
            'user' => 'insurance',
            'password' => 'admin'
        );
    }

    public function getDriver() {
        return $this->_driver;
    }

    public function getConnection() {
        extract($this->_driver);
        $db_object = mysqli_connect($host, $user, $password, $dbname);

        return $db_object;
    }

}

?>

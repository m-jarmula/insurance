<?php

class Core_Singleton {

    public static $objects = array();

    public static function getSingleton($object) {
        if (empty(self::$objects[$object])) {
            self::$objects[$object] = new $object;
            return self::$objects[$object];
        } else {
            return self::$objects[$object];
        }
    }

}

?>

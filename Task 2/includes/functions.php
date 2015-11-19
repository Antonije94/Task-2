<?php

class Kalendar {

    private static $_instance = null;

    public static function getInstance()
    {

        if (self::$_instance == null)
        {
            self::$_instance = new Kalendar();
        }

        return self::$_instance;
    }

}
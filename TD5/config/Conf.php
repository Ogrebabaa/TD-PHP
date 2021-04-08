<?php

Class Conf {
    static private $databases = array(
        "hostname" => "localhost",
        "databases" => "covoiturage",
        "login" => "root",
        "password" => "root"
    );

    static private $debug = True;

    static public function getDebug(){
        return self::$debug;
    }

    static public function getLogin(){
        return self::$databases['login'];
    }
    static public function getHostname(){
        return self::$databases['hostname'];
    }
    static public function getDatabase(){
        return self::$databases['databases'];
    }
    static public function getPassword(){
        return self::$databases['password'];
    }
}

?>
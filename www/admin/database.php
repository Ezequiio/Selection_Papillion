


<?php

class Database

{

    private static $dbHost = "ezequiz236.mysql.db";
    private static $dbName = "ezequiz236";
    private static $dbUser = "ezequiz236";
    private static $dbUserPassword = "Kilianfc72";
    private static $connection = null;
    
    
    
    
    public static function connect()
    {
        try
        {
         self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$connection;
    
    }
    public static function disconnect()
    {
        self::$connection = null;
    }

}

?>
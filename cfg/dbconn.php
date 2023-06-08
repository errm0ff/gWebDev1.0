<?php
//Database configuration class
class DB{
    const USER = "root";
    const PASSWORD = "";
    const DATABASE = "wf3_php_final_meryem1";
    const HOSTNAME = "localhost";
    
    public static function connectDB(){
        $user = self::USER;
        $password = self::PASSWORD;
        $database = self::DATABASE;
        $hostname = self::HOSTNAME;
        
        $conn = new PDO("mysql:dbname=$database;host=$hostname", $user, $password);
        return $conn;
    }
}



<?php

class Connection
{
    // private static $connection;

    private function __construct(){}

    public static function getInstance()
    {
      define('HOST', 'localhost');
      define('USER', 'root');
      define('PASS', '3283_marC');
      define('BASE', 'desafioPHP');
      
      $conn = new MySQLi(HOST, USER, PASS, BASE);
    }
}
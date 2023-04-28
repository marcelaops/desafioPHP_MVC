<?php

class Connection
{
    // private static $connection;

    // uso o construtor aqui?
    private function __construct(){}

    public static function getInstance()
    {
      // posso usar o $this ao invés do define ?!

      define('HOST', 'localhost');
      define('USER', 'root');
      define('PASS', '3283_marC');
      define('BASE', 'desafioPHP');
      
      $conn = new MySQLi(HOST, USER, PASS, BASE);
    }
}
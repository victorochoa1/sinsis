<?php

class ConnectDb {

  private static $instance = null;
  private $conn;
  
  private $host = 'us-cdbr-east-02.cleardb.com';
  private $user = 'b719b4777a87df';
  private $pass = 'd098db26';
  private $name = 'heroku_a02fabf44b71bf2';
   
  private function __construct()
  {
    $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->name);
  }
  
  public static function getInstance()
  {
    if(!self::$instance)
    {
      self::$instance = new ConnectDb();
    }
   
    return self::$instance;
  }
  
  public function getConnection()
  {
    return $this->conn;
  }
}
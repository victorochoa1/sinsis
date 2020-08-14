<?php
/*$conexion=mysqli_connect('localhost','sinsis','root','sinsis');
$db=new mysqli("localhost","sinsis","root","sinsis");*/
$mysqli = new mysqli("us-cdbr-east-02.cleardb.com","b719b4777a87df","d098db26","heroku_a02fabf44b71bf2");
$conexion=mysqli_connect("us-cdbr-east-02.cleardb.com","b719b4777a87df","d098db26","heroku_a02fabf44b71bf2");
$db=new mysqli("us-cdbr-east-02.cleardb.com","b719b4777a87df","d098db26","heroku_a02fabf44b71bf2");
if(mysqli_connect_errno()){
    echo '<p>Error: no se pudo conectar a la BD.<br/>Por favor intenta nuevamente mas tarde</p>';
    exit;
}

/* class ConnectDb {

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
} */
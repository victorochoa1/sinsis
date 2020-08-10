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

?>
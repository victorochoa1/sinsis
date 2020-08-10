<?php

/*$conexion=mysqli_connect('localhost','sinsis','root','sinsis');
$db=new mysqli("localhost","sinsis","root","sinsis");*/
$mysqli = new mysqli("localhost","root","","sinsis");
$conexion=mysqli_connect('localhost','root','','sinsis');
$db=new mysqli("localhost","root","","sinsis");
if(mysqli_connect_errno()){
    echo '<p>Error: no se pudo conectar a la BD.<br/>Por favor intenta nuevamente mas tarde</p>';
    exit;
}

?>
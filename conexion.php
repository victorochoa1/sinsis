<?php

/*$conexion=mysqli_connect('localhost','sinsis','root','sinsis');
$db=new mysqli("localhost","sinsis","root","sinsis");*/
$conexion=mysqli_connect('localhost','whiqwwlyimlukm','e7a0185d43ddc4c59d96d14fd87165d30e44b37e6583f1bbeb1591d64ef91503','sinsis');
$db=new mysqli("localhost","whiqwwlyimlukm","e7a0185d43ddc4c59d96d14fd87165d30e44b37e6583f1bbeb1591d64ef91503","sinsis");
if(mysqli_connect_errno()){
    echo '<p>Error: no se pudo conectar a la BD.<br/>Por favor intenta nuevamente mas tarde</p>';
    exit;
}

?>
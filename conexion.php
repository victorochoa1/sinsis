<?php

/*$conexion=mysqli_connect('localhost','sinsis','root','sinsis');
$db=new mysqli("localhost","sinsis","root","sinsis");*/
$conexion= new PDO('pgsql:host=ec2-35-173-94-156.compute-1.amazonaws.com;port=5432;dbname=daj11ftgi9ivai','whiqwwlyimlukm','
e7a0185d43ddc4c59d96d14fd87165d30e44b37e6583f1bbeb1591d64ef91503');
$db=new PDO('pgsql:ec2-35-173-94-156.compute-1.amazonaws.com;port=5432;dbname=daj11ftgi9ivai','whiqwwlyimlukm','
e7a0185d43ddc4c59d96d14fd87165d30e44b37e6583f1bbeb1591d64ef91503');
if(mysqli_connect_errno()){
    echo '<p>Error: no se pudo conectar a la BD.<br/>Por favor intenta nuevamente mas tarde</p>';
    exit;
}

?>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('conexion.php');

//var_dump($_POST);
$accion=0;
//$accion=$_GET['ac'];

if($accion == 6){
    $nombre_emp=$_POST["nombre_empleado"];
    $apellido_emp=$_POST["apellido_empleado"];
    $correo=$_POST["correo"];
    var_dump($_POST);

    //INSERT INTO `prueba` (`id_prueba`, `nombre`, `apellidos`, `correo`) VALUES (NULL, '123', '123', '123');
    $query ="INSERT INTO `prueba` (`nombre`, `apellidos`, `correo`) VALUES (?,?,?)";
    $stmt=$db->prepare($query);
    $stmt->bind_param('sss',$nombre_emp,$apellido_emp,$correo);
    $stmt->execute();
    echo'actualizado';

}

//Ingresar datos a la tabla usuario
if($_POST > 0 && $accion !=6){
//if($_POST > 0){
    
    $nombre_emp=$_POST["nombre_empleado"];
    $apellido_emp=$_POST["apellido_empleado"];
    $contraseña=$_POST["contraseña"];
    $correo=$_POST["correo"];
    $proyecto=3;
    
    //var_dump($proyecto);
    //var_dump($_POST);

     //Regresa un false el "prepare" antes del bind_param
     //$query="INSERT INTO `usuario` ( `nombre`, `apellidos`, `correo`, `user`, `contraseña`, `puesto`) VALUES (?,?,?,?,?,?)";
     $query ="INSERT INTO `usuario` (`nombre`, `apellidos`, `correo`, `contraseña`,`proyecto`) VALUES (?,?,?,?,?)";
     //INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `correo`, `user`, `contraseña`, `puesto`) VALUES (NULL, 'Minina', 'Baby', 'minina@black.com', 'Minina', '123', '2');
     echo '1';
     echo '-';
     //var_dump($puesto);
     echo '-';
     //INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `correo`, `user`, `contraseña`, `puesto`) VALUES (NULL, 'Gatopollo', 'Albino', 'elpollo@blanco.com', 'Gatopollo', '123', '3');
     $stmt=$db->prepare($query);
     echo '2';
     $stmt->bind_param('ssssi',$nombre_emp,$apellido_emp,$correo,$contraseña,$proyecto);
     echo '3';
     $stmt->execute();
     echo '4';
     echo'actualizado';
    

   
    

}



?>
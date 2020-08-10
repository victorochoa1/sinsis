<?php
session_start();
include_once("conexion.php");

$user = $_POST['user'];
$pass = $_POST['pass'];
//echo $_POST['user'];
//echo $_POST['pass'];
//var_dump($_POST);
//array(2) { ["user"]=> string(3) "123" ["pass"]=> string(3) "123" }

$sql = "SELECT * FROM usuario WHERE nombre ='$user' AND contrasena = '$pass'";
//var_dump($sql);
//string(65) "SELECT * FROM usuario WHERE nombre ='123' AND contraseña = '123'"
$result = mysqli_query($db,$sql);
$columna = mysqli_fetch_array($result);
var_dump($columna);

//validar el inicio de sesion, que hacer si son los datos incorrectos

//var_dump($columna);
//array(12) { [0]=> string(1) "1" ["id_usuario"]=> string(1) "1" [1]=> string(3) "123" 
//["nombre"]=> string(3) "123" [2]=> string(3) "123" ["apellidos"]=> string(3) "123" [3]=> string(11) "123@123.123"
//"correo"]=> string(11) "123@123.123" [4]=> string(3) "123" ["contrasena"]=> string(3) "123" [5]=> string(1) "1" ["gerente"]=> string(1) "1" }
//printf("Error message: %s\n", $conexion->error);
if($columna != NULL){

    if(isset($user) && isset($pass)){
        $_SESSION['id_usuario'] = $columna['id_usuario'];
        $_SESSION['nombre'] = $columna['nombre'];
        $_SESSION['apellidos'] = $columna['apellidos'];
        $_SESSION['correo'] = $columna['correo'];
        $_SESSION['gerente'] = $columna['gerente'];
        //var_dump($columna['gerente']);
    
        if($_SESSION['gerente']==1){
            header("Location: gerente.php");
            exit();
        }
        else if($_SESSION['gerente']==0){
            header("Location: consultor.php");
            exit();
        }
        else{
            header("Location: login.php");
            exit();
        }
    
        $conexion->close(); 
    
    
    }else{
        header("Location:login.php");
    }
}else{
    header("Location:login.php");
}





?>
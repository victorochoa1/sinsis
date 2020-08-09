
    <?php

session_start();
include_once("conexion.php");

$user = $_POST['user'];
$pass = $_POST['pass'];


$sql = "SELECT * FROM usuario WHERE nombre ='$user' AND contra = '$pass'";
$result = (mysqli_query($conexion,$sql));  

$columna = mysqli_fetch_array($result);

$_SESSION['id_user_sesion'] = $columna['id_usuario'];
$_SESSION['nombre'] = $columna['nombre'];
$_SESSION['apellidos'] = $columna['apellidos'];
$_SESSION['nivel'] = $columna['id_nivel'];

if($_SESSION['nivel']==1){header("Location: gerente.php");exit();}
else if($_SESSION['nivel']==2){header("Location: consultor.php");exit();}
//else if($_SESSION['nivel']==3){header("Location: indexalumno.php");exit();}
else{header("Location: index.php");exit();}

$conexion->close(); 



?>
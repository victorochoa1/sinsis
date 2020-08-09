<?php
    session_start();
    if(!isset($_SESSION["nombre"]) || $_SESSION['gerente']!= 0){
        header("Location: consultor.php");
        exit();
    }/*else{
        header("Location: cerrarsesion.php");
    }*/

  
?>
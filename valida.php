<?php
    session_start();
    if(!isset($_SESSION["nombre"]) || $_SESSION['gerente']!= 1){
        header("Location: gerente.php");
        exit();
    }/*else{
        header("Location: cerrarsesion.php");
    }*/

  
?>
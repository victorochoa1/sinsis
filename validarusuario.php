<?php
session_start();


if(isset($_SESSION["gerente"]))
{
    header("Location:gerente.php");
}
else if(isset($_SESSION["empleado"]))
{
    header("Location:consultor.php");
}
/*else if(isset($_SESSION["alumno_lider"]))
{
    header("Location:lider.php");
}*/
?>
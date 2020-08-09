<?php
include('conexion.php');
$diagnostico = 1;
$sql = "SELECT * FROM entrevista, usuario, proyectos WHERE entrevista.proyecto = proyectos.id_proyectos AND usuario.proyecto = proyectos.id_proyectos AND proyectos.id_proyectos=  $diagnostico";
        $result=mysqli_query($db,$sql);
        $mostrar=mysqli_fetch_array($result);
        var_dump($mostrar);
        echo '</br>';
        echo '</br>';
        echo '</br>';
        echo '</br>';
        echo $mostrar[15];

?>
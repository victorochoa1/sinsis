<?php
include('conexion.php');
//$cerrar=$_POST["diagnostico_cerrar"];
//$cerrar = (is_numeric($_POST['diagnostico_cerrar']) ? (int)$_POST['diagnostico_cerrar'] : 0);
$i=0;
$cerrar = 14;
//echo $cerrar;
$sql="SELECT * FROM proyectos, usuario WHERE proyectos.id_proyectos = usuario.proyecto AND proyectos.id_proyectos = $cerrar";
//$sql="SELECT COUNT(*) FROM proyectos, usuario WHERE proyectos.id_proyectos = usuario.proyecto AND proyectos.id_proyectos = $cerrar";
$result=mysqli_query($db,$sql);
$mostrar=mysqli_fetch_array($result);
var_dump($mostrar);
echo '</br>';
echo '</br>';
echo '</br>';
var_dump($mostrar[0][$i]);
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';


while($mostrar=mysqli_fetch_array($result)){
    var_dump($mostrar);
    echo '</br>';
    echo '</br>';
    echo '</br>';
    var_dump($mostrar[0][$i]);
    $i++;
}

?>
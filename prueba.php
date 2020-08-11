<?php
include('conexion.php');
$ruta ="/diagnostico/nuevo-diagnostico.pdf";
$proyecto =1;
//INSERT INTO `diagnostico` (`id_diagnostico`, `proyecto`, `ruta`) VALUES (NULL, '16', '/diagnosticos/diagnostico.pdf'), (NULL, '3', '/diagnosticos/diagnostico2.pdf');
$sql3="INSERT INTO `diagnostico` ( `proyecto`, `ruta`) VALUES ( ?,?)";
$stmt=$db->prepare($sql3);
$stmt->bind_param('is',$proyecto, $ruta);
//$stmt->bind_param('i',$usuarios[$i]);
$stmt->execute(); 
//$i++;

if  ($stmt->affected_rows>0){
header("Location:diagnostico.php");                        
}
?>
<?php

require_once './dompdf/autoload.inc.php';
require_once 'generarPdf.php';
use Dompdf\Dompdf;

$proyectoDiagnostico=$_POST['diagnostico_ver']; //Esta variable se tiene que mandar a operaciones para el insert
$_SESSION['proyecto_diagnostico'] = $_POST['diagnostico_ver'];

// $sql ="SELECT * FROM proyectos, proyecto_usuario, usuario, entrevista WHERE proyecto_usuario.id_proyectos = proyectos.id_proyectos 
// AND proyecto_usuario.id_usuario = usuario.id_usuario 
// AND entrevista.proyecto = proyectos.id_proyectos 
// AND entrevista.proyecto = proyectos.id_proyectos 
// AND proyectos.id_proyectos = $proyectoDiagnostico";

$sql = "SELECT * FROM entrevista, usuario, proyectos, proyecto_usuario 
                    WHERE entrevista.proyecto = proyectos.id_proyectos
                        AND proyecto_usuario.id_proyectos = proyectos.id_proyectos
                        AND proyecto_usuario.id_usuario = usuario.id_usuario 
                        AND proyectos.id_proyectos =  $proyectoDiagnostico";
$result=mysqli_query($db,$sql);
$mostrar=mysqli_fetch_array($result);


$dompdf = new Dompdf();
$generador = new PDF($proyectoDiagnostico);  /* aqui pasas el parametro el id del diganostico */
   
$nombreProyecto = $mostrar['nombre_proyecto']. $mostrar['fecha'].$mostrar['nombre_entrevistado'];

// $rutaGuardado = "pdfs\\"; //windows
//$rutaGuardado = "\\pdfs\\";
//C:\\xampp\\htdocs\\sinsis\\pdfs\\
$rutaGuardado = "pdfs/"; //linux
$nombreArchivo = $nombreProyecto.".pdf";


$rutaDiagnostico = $rutaGuardado.$nombreArchivo;//Esta variable se tiene que usar para el insert
$_SESSION['rutaguardado'] =$rutaDiagnostico;


$content = $generador->generar(); /* aqui llamas a la funcion generar y te regresa el html
 */

$dompdf->loadHtml($content);/*  esto ya es del paquete dompdf */

$dompdf->setPaper('A4', 'landscape');/*  esto ya es del paquete dompdf */


$dompdf->render();/*  esto ya es del paquete dompdf */
$output = $dompdf->output();
$dompdf->stream("codexworld", array("Attachment" => 0)); /*  esto ya es del paquete dompdf */
file_put_contents( $rutaGuardado.$nombreArchivo, $output);

$sql3="INSERT INTO `diagnostico` ( `proyecto`, `ruta`) VALUES ( ?,?)";
$stmt=$db->prepare($sql3);
$stmt->bind_param('is',$proyectoDiagnostico, $rutaDiagnostico);
$stmt->execute();
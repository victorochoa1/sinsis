<?php

require_once 'dompdf/autoload.inc.php';
require_once 'generarPdf.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$generador = new PDF(1);  /* aqui pasas el parametro el id del diganostico */

$length = 10;    
$randomString = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

$rutaGuardado = "C:\\laragon\\www\\sinsis\\pdfs\\";
$nombreArchivo = $randomString.".pdf";


$content = $generador->generar(); /* aqui llamas a la funcion generar y te regresa el html
 */

$dompdf->loadHtml($content);/*  esto ya es del paquete dompdf */

$dompdf->setPaper('A4', 'landscape');/*  esto ya es del paquete dompdf */


$dompdf->render();/*  esto ya es del paquete dompdf */
$output = $dompdf->output();
$dompdf->stream("codexworld", array("Attachment" => 0)); /*  esto ya es del paquete dompdf */
file_put_contents( $rutaGuardado.$nombreArchivo, $output);

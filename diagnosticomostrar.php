<?php
// Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
require_once 'generarPDF.php';
//$_REQUEST()

//$diagnostico = $_POST['diagnostico_ver'];  
$diagnostico = (is_numeric($_POST['diagnostico_ver']) ? (int)$_POST['diagnostico_ver'] : 0);
$dir = 'diagnostico_vista.php';


use Dompdf\Dompdf; 
 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();
$generador = new PDF($diagnostico);
$content = $generador->generar();

// Load HTML content 
$dompdf->loadHtml($content); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream();


?>
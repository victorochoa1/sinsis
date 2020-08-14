<?php
// Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
//require_once 'generarPDF.php';


$diagnostico = $_POST['diagnostico_ver'];  
$dir = 'diagnostico_vista.php';

class PDF{
    private $idDiagnostico = null;

    public function _construc($idDiagnostico){
        $this->idDiagnostico = $diagnostico;
    }
    public function generar(){
        return $dir;
    }

}
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();
$generador = new PDF(2);
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
<?php
//agregar libreria tcpdf
require_once './tcpdf_min/tcpdf.php';
include('conexion.php');


$diagnostico = (is_numeric($_POST['diagnostico_ver']) ? (int)$_POST['diagnostico_ver'] : 0);
$query = "SELECT * FROM entrevista, usuario, proyectos, proyecto_usuario WHERE entrevista.proyecto = proyectos.id_proyectos AND proyecto_usuario.id_proyectos = proyectos.id_proyectos AND proyecto_usuario.id_usuario = usuario.id_usuario AND proyectos.id_proyectos=  $diagnostico";
$result=mysqli_query($db,$query);
$mostrar=mysqli_fetch_array($result);

//direccion de lo que se tiene que mostrar en el diagnosticopdf.php
$dir ='diagnostico_vista.php';
$manejador = fopen("diagnostico_vista.php",'r');
//var_dump($mostrar);

if($mostrar["documentacion"]=="1"){
    $mostrar["documentacion"]= "si";
}else{
    $mostrar["documentacion"]= "no";
}

if($mostrar["conocimiento_empleados"] == "1"){
    $mostrar["conocimiento_empleados"] = "si";
}else{
    $mostrar["conocimiento_empleados"]= "no";
}

if($mostrar["acceso_empleados"] == "1"){
    $mostrar["acceso_empleados"]="si";
}else{
    $mostrar["acceso_empleados"]="no";
}

if($mostrar["conocimiento_de_reglamentos"]=="1"){
    $mostrar["conocimiento_de_reglamentos"]="Si";
}else{
    $mostrar["conocimiento_de_reglamentos"]="No";
}

if($mostrar["estado_financiero_empresa"] =="1"){
    $mostrar["estado_financiero_empresa"]="Si";
}else{
    $mostrar["estado_financiero_empresa"]="No";
}

$mostrar['nombre_proyecto'];

//Falta aun mostrar el php de diagnostico_vista.php
 
//clase para crear header y footer personalizado
class mipdf extends TCPDF{  
  //Header personalizado
  public function Header() {
    //imagen en header
    $logo = 'logo1.png';
    $this->Image($logo, 25, 10, 25, '', 'PNG', '', '', false, 300, '', false, false, 0, false, false, false);
        
    $this->SetFont('helvetica', 'B', 20);
    $this->Cell(0, 0, 'Diagnostico de  ', 0, false, 'C', 0, '', 0, false, 'T', 'M');
  }
  
  //footer personalizado
  public function Footer() {
    // posicion
    $this->SetY(-15);
    // fuente
    $this->SetFont('helvetica', 'I', 8);
    // numero de pagina
    $this->Cell(0, 10, 'Página '.$this->getAliasNumPage().' de '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
  }
}
 
//iniciando un nuevo pdf
$pdf = new mipdf(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);
 
//establecer margenes
$pdf->SetMargins(25, 35, 25);
$pdf->SetHeaderMargin(20);
 
//informacion del pdf
$pdf->SetCreator('Sinsis');
$pdf->SetAuthor('Sinsis');
$pdf->SetTitle('Diagnostico de ');
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
//tipo de fuente y tamanio
$pdf->SetFont('helvetica', '', 12);
 
//agregar pag 1
$pdf->AddPage();
//$html=fopen("archivos/".$nombre.$apellido.".txt","r");
$html = fgets($manejador);
//escribe el texto en la hoja
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
 
 
//agregar pag 2
$pdf->AddPage();
//escrite el texto en la hoja
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
 
//terminar el pdf
$pdf->Output('diagnostico **.pdf', 'I');



?>
<?php
	include 'plantilla.php';
	require 'conexion.php';

	$diagnostico = (is_numeric($_POST['diagnostico_ver']) ? (int)$_POST['diagnostico_ver'] : 0);
	//$query = "SELECT id_diagnostico,proyecto,direccion FROM diagnostico";
	$query = "SELECT * FROM entrevista, usuario, proyectos, proyecto_usuario WHERE entrevista.proyecto = proyectos.id_proyectos AND usuario.id_usuario = proyecto_usuario.id_usuario AND proyectos.id_proyectos = proyecto_usuario.id_proyectos AND proyectos.id_proyectos = $diagnostico";
	//var_dump($query);
	$resultado = $mysqli->query($query);
	var_dump($resultado);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,6,'id diagnostico',1,0,'C',1);
    $pdf->Cell(20,6,'proyecto',1,0,'C',1);
    $pdf->Cell(20,6,'direccion',1,1,'C',1);

	
	$pdf->SetFont('Arial','',10);
	$row = $resultado->fetch_assoc();

	$pdf->Cell(70,6,utf8_decode($row['id_proyectos']),1,0,'C');
	$pdf->Cell(20,6,$row['proyecto'],1,0,'C');
	$pdf->Cell(70,6,utf8_decode($row['direccion']),1,1,'C');
	
	/*while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['id_proyectos']),1,0,'C');
		$pdf->Cell(20,6,$row['proyecto'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['direccion']),1,1,'C');
		
		//$pdf->Cell(70,6,utf8_decode($row['id_diagnostico']),1,0,'C');
		//$pdf->Cell(20,6,$row['proyecto'],1,0,'C');
		//$pdf->Cell(70,6,utf8_decode($row['direccion']),1,1,'C');
	}*/
	$pdf->Output();
?>
<?php
	include 'plantilla.php';
	require 'conect.php';
	
	$query = "SELECT id_diagnostico,proyecto,direccion FROM diagnostico";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,6,'id diagnostico',1,0,'C',1);
    $pdf->Cell(20,6,'proyecto',1,0,'C',1);
    $pdf->Cell(20,6,'direccion',1,1,'C',1);

	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['id_diagnostico']),1,0,'C');
		$pdf->Cell(20,6,$row['proyecto'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['direccion']),1,1,'C');
	}
	$pdf->Output();
?>
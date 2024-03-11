<?php
	include 'clases/plantilla.php';
	require 'clases/conexion.php';
	
    $sql="select * from usuarios u INNER JOIN cargo c ON u.id_cargo = c.id";
    $resultados=$conexion->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	//color en rgb
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(20,6,'CARNET',1,0,'C',1);
	$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(30,6,'APELLIDO',1,0,'C',1);
    $pdf->Cell(35,6,'CARGO',1,0,'C',1);
    $pdf->Cell(30,6,'CELULAR',1,0,'C',1);
    $pdf->Cell(50,6,'FECHA DE REGISTRO',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultados->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['usuario']),1,0,'C');
        $pdf->Cell(30,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['apellido']),1,0,'C');
        $pdf->Cell(35,6,utf8_decode($row['tipo']),1,0,'C');
        $pdf->Cell(30,6,utf8_decode($row['celular']),1,0,'C');
        $pdf->Cell(50,6,utf8_decode($row['fecha']), 1,1,'C');
	}
	$pdf->Output();
?>
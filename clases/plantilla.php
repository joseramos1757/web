<?php
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('assets/img/berlin.png', 5, 5, 15 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
            $this->Cell(120,5, 'INSTITUTO TECNICO BERLIN',0,1,'C');
			$this->Cell(180,10, 'REPORTE DE USUARIOS',0,1,'C');
			$this->Ln(5);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
            $this->Cell(-192, 20, 'Fecha: '.date('d-m-Y').'',0,0,'C');
		}		
	}
?>
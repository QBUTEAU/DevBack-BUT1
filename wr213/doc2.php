<?php
    require 'php/fpdf185/fpdf.php';
    
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(30,15,'Punition sans boucle...',0,1);
    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Cell(30,10,'Je dois apprendre mes instructions PHP par coeur !',0,1);
    $pdf->Cell(30,10,'Je dois apprendre mes instructions PHP par coeur !',0,1);
    $pdf->Cell(30,10,'Je dois apprendre mes instructions PHP par coeur !',0,1);
    $pdf->Cell(30,10,'Je dois apprendre mes instructions PHP par coeur !',0,1);
    $pdf->Output();
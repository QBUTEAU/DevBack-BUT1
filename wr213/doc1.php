<?php

    require ('php/fpdf185/fpdf.php');

    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(30,10,'C\'est cool le BUT MMI !');
    $pdf->Output();


?>
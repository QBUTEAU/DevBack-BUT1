<?php
    require 'php/mon_fpdf.php';

    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    ecrireTexteCouleur($pdf, 255, 0, 0, 30, 15, "Ma punition...");
    $pdf->SetFont('Arial', '', 13);
    for($i=1; $i<11; $i++){
        ecrireTexteCouleur($pdf, 0, 255, 0, 30, 10, "$i - Je dois apprendre mes instructions PHP par coeur !");
    }
    $pdf->Output();
?>
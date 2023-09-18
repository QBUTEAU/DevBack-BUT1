<?php
    require 'fpdf185/fpdf.php';

    function ecrireTexteCouleur($document, $rouge, $vert, $bleu, $largeur, $hauteur, $texte){
        $document->setTextColor($rouge, $vert, $bleu);
        $document->Cell($largeur, $hauteur, $texte, 0, 1);
    }

?>
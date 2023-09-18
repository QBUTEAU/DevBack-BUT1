<?php

$prenom = "Corto";
$nom = "Maltese";
$age = 30;
$bourse = [143,132,101,202];
$annee = [2018,2019,2020,2021];
$coef = 1.5;

echo "PARTIE 1 <br>";
echo "Je m'appelle $prenom $nom, j'ai $age ans et <br>
en $annee[0], j'avais $bourse[0]€, <br>
en $annee[1], j'avais $bourse[1]€, <br> 
en $annee[2], j'avais $bourse[2]€, <br> 
et en $annee[3], j'avais $bourse[3]€, <br> <br>";

echo "PARTIE 2 <br>";
echo "Je m'appelle $prenom $nom, j'ai $age ans et <br>
en 2017, j'avais ".($bourse[0]/2)."€, <br>
en $annee[0], j'avais $bourse[0]€, <br>
en $annee[1], j'avais $bourse[1]€, <br> 
en $annee[2], j'avais $bourse[2]€, <br> 
en $annee[3], j'avais $bourse[3]€, <br>
en 2022, j'aurais ".($bourse[3]*$coef)."€ <br>
et en 2023, j'aurais ".($bourse[3]*$coef*$coef)."€. <br> <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP2</title>
</head>
<body>
    <h1>Ma page avec du PHP !</h1>
    <p>Ceci est un paragraphe.</p>
    <?php
    $prenom = "Quentin";
    $nom = "Buteau";
    echo "<p>Bonjour, je suis ".$prenom." ".$nom.".</p>";
    ?>
</body>
</html>
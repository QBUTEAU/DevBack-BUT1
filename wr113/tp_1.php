<?php
echo "Exercice 1";
echo "<br>";
$nom = "Maltese";
$mere = "Nina de Gibraltar";
$ami = "Raspoutine";
echo "Je m'appelle Corto $nom l'aventurier, <br>\n 
je suis le fils de la $mere <br>\n 
et mon meilleur ami est $ami. <br>\n <br>\n" ; 

echo "Exercice 2";
echo "<br>";
$a=3;
if ($a==1) 
    {$moi = "Corto";
    $ami1 = "Raspoutine";
    $ami2 = "Pandora";}
elseif ($a==2)
    {$moi = "Raspoutine";
    $ami1 = "Corto";
    $ami2 = "Pandora";}
elseif ($a==3)
    {$moi = "Pandora";
    $ami1 = "Raspoutine";
    $ami2 = "Corto";}
echo "Je m'appelle $moi et mes amis sont $ami1 et $ami2.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP1</title>
</head>
</html>
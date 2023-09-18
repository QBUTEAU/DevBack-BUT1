<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP6</title>
</head>
<body>
    <h1>La ballade de la mer salée</h1>
    <p style="color : blue;font-style : italic">
    <?php
    
    echo "PARTIE 1 - Fonction avec plusieurs entrées";
    echo "<br>";
        $tab=[11,13,14,16,17,14,18,4];
        function moyenne1($x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8){
            echo ($x1+$x2+$x3+$x4+$x5+$x6+$x7+$x8)/8;
        }
        
        moyenne1(11,13,14,16,17,14,18,4);

    echo "<br>";
    echo "<br>";
    echo "PARTIE 2 - Fonction avec un tableau en entrée";
    echo "<br>";
        function moyenne2($tx){
            echo ($tx[0]+$tx[1]+$tx[2]+$tx[3]+$tx[4]+$tx[5]+$tx[6]+$tx[7])/8;
        }
        
        moyenne2($tab);

    echo "<br>";
    echo "<br>";
    echo "PARTIE 3 - Fonction avec une boucle";
    echo "<br>";
        function moyenne3($tx){
            $somme=0;
            for ($i=0; $i <count($tx);$i++){
                $somme+=$tx[$i];
            }
            echo $somme/count($tx);
        }

        moyenne3($tab);

    echo "<br> <br>";
    echo "EXERCICE SUPPLÉMENTAIRE";
        function titre1($num,$texte,$couleur){
            echo "<h$num style='color:$couleur'>$texte";
        }
        titre1(1, "Hi guys ! I'm here","red");
    ?>
</body>
</html>
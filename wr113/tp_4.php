<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP TP4</title>
</head>
<body>
    <h1>La ballade de la mer salée</h1>
    <p style="color:blue ; font-style:italic">
    <?php
        echo "Voila le travail du TP4 :<br>\n <br>\n";
        echo "PARTIE 1 <br>\n";

        for($i = 0; $i < 10; $i++){
            echo $i . " ";
        }
        echo "<br>\n";
        for($i = 9; $i > 0; $i--){
            echo $i . " ";
        }
        echo "<br>\n";
        for($i = 100; $i >= 10; $i-=10){
            echo $i . " ";
        }
        echo "<br>\n";
        echo "<br>\n"; 
        echo "PARTIE 2";
        echo "<br>\n";

        $acc=0;
        for($i = 0; $i < 101; $i++){
            echo $i . " ";
            $acc += $i;
        }
        echo "<br>\n";
        echo "La somme des nombres de 1 à 100 est de : $acc.";
        echo "<br>\n";
        echo "<br>\n";

        $acc=0;
        $debut=3;
        $fin=13;
        for ($i=$debut;$i<=$fin;$i++){
            $acc += $i;
            echo $i . " ";
        }
        echo "<br>\n";
        echo "La somme des nombres de 3 à 13 est de : $acc.";
        echo "<br>\n";
        echo "<br>\n";

        $acc=0;
        $debut=26;
        $fin=20;
        for ($i=$debut;$i>=$fin;$i--){
            $acc += $i;
            echo $i . " ";
        }
        echo "<br>\n";
        echo "La somme des nombres de 26 à 20 est de : $acc.";
    ?>
    </p>
</body>
</html>
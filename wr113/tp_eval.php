<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EVALUATION</title>
</head>
<body>
    <h1>TP WR113 - Evaluation</h1>
    <?php

    $tabvetements = ["pantalon", "tee-shirt", "sweat", "chemise"];
    $tabmois = ["janvier", "fevrier", "mars", "avril", "mai", "juin"];
    $tab2D = [[1,2,10,1],[2,2,0,1],[3,2,0,1],[1,2,3,1],[1,2,0,1],[6,2,4,1]];

        echo "PARTIE 0";
        echo "<br>";
        echo "En $tabmois[0], $tabmois[1], $tabmois[2], j'ai acheté des
        $tabvetements[0]s, des $tabvetements[1]s, des $tabvetements[2]s, 
        et des $tabvetements[3]s.<br>
        Et de même en $tabmois[3], $tabmois[4], $tabmois[5].";

        echo "<br>";
        echo "<br>";
        echo "PARTIE 1";
        echo "<br>";



        echo "<br>";
        echo "<br>";
        echo "PARTIE 2";
        echo "<br>";
        for ($i=0; $i<count($tabvetements); $i++){
            for ($j=0; $j<count($tabmois); $j++){
                echo "Des ".$tabvetements[$i].", j'en ai acheté ".$tab2D[$j][$i]." en ".$tabmois[$j].
                ", ".$tab2D[$j+1][$i]." en ".$tabmois[$j+1].", ".$tab2D[$j+2][$i]." en ".$tabmois[$j+2].
                ", ".$tab2D[$j+3][$i]." en ".$tabmois[$j+3].", ".$tab2D[$j+4][$i]." en ".$tabmois[$j+4].
                " et ".$tab2D[$j+5][$i]." en ".$tabmois[$j+5].", et j'en suis content. <br>";
            }
        }

    ?>
</body>
</html>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP10</title>
</head>
<body>
    <h1>TP 10 - Récapitulatif</h1>
    <?php

                // 10.1 - 4 tableaux simples //

    echo "10.1 - 4 TABLEAUX SIMPLES :";
    $tabPrenom=["Corto","M.","Pandora","Shanghai"];
    $tabNom=["Maltese","Raspoutine","Groovesnore","Li"];
    $tabAge=[30,50,17,25];
    $tabSexe=["M","M","F","F"];

    $i = random_int(0,3);
    echo "<br><br>";
    echo "Je m'appelle $tabPrenom[$i] $tabNom[$i], 
    je suis une personne de $tabAge[$i] ans et je suis de sexe $tabSexe[$i].";

                // 10.2 - Lecture à l'aide d'une boucle //

    echo "<br><br>";
    echo "10.2 - LECTURE À L'AIDE D'UNE BOUCLE :";
    echo "<br><br>";

    for($i=0; $i<=3; $i++){
        echo "Je m'appelle $tabPrenom[$i] $tabNom[$i], 
        je suis une personne de $tabAge[$i] ans et je suis de sexe $tabSexe[$i].<br>";
    }

                // 10.3 - 1 seul tableau simple (1 dimension) //

    echo "<br>";
    echo "10.3 - 1 SEUL TABLEAU SIMPLE (1 DIMENSION) :";
    echo "<br><br>";

    $tabTotal=["Corto","M.","Pandora","Shanghai",
                "Maltese","Raspoutine","Groovesnore","Li",
                30,50,17,25,
                "M","M","F","F"];

    for($i=0; $i<4; $i++){
            echo "Je m'appelle ".$tabTotal[$i]. " " .$tabTotal[$i+4]. ", 
            je suis une personne de " . $tabTotal[$i+8] .  " ans et de sexe "
              . $tabTotal[$i+12] . ".<br>";
    }

                // 10.4 - 1 Tableau à 2 dimensions //

    echo "<br>";
    echo "10.4 - 1 TABLEAU À 2 DIMENSIONS :";
    echo "<br><br>";

    $tab2D= [["Corto","M.","Pandora","Shanghai"],
                ["Maltese","Raspoutine","Groovesnore","Li"],
                [30,50,17,25],
                ["M","M","F","F"]];

    for($i=0; $i<4; $i++){
        echo "Je m'appelle ".$tab2D[0][$i]. " " .$tab2D[1][$i]. ", 
            je suis une personne de " . $tab2D[2][$i] .  " ans et de sexe "
              . $tab2D[3][$i] . ".<br>";
    }

                // 10.5 - 1 Tableau associatif à 2 dimensions //

    echo "<br>";
    echo "10.5 - 1 TABLEAU ASSOCIATIF À 2 DIMENSIONS :";
    echo "<br><br>";

    $tabAsso=[["prenom"=>"Corto","nom"=>"Maltese", "age"=>30, "sexe"=>"M"],
            ["prenom"=>"M.","nom"=>"Raspoutine","age"=>50,"sexe"=>"M"],
            ["prenom"=>"Pandora","nom"=>"Groovesnore","age"=>17,"sexe"=>"F"],
            ["prenom"=>"Shanghai","nom"=>"Li","age"=>25,"sexe"=>"F"]];
    
    for($i=0; $i<4; $i++){
        echo "Je m'appelle ".$tabAsso[$i]["prenom"]. " " .$tabAsso[$i]["nom"]. ", 
            je suis une personne de " . $tabAsso[$i]["age"] .  " ans et de sexe "
              . $tabAsso[$i]["sexe"] . ".<br>";
    }

    ?>
</p>
</body>
</html>
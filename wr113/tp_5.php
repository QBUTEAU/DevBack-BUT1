<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="utf−8"> 
    <title>PHP TP5</title>
</head>
<body>
    <h1>La ballade de la mer salée</h1>
    <p style="color:blue;font-style:italic">
<?php
    echo "PARTIE 1";
    echo "<br>\n";
    $tab=[11,13,14,16,17,14,18];
    echo "En MMI, j'ai $tab[0] en Maths, $tab[1] en Prog,
    $tab[2] en Réseaux, $tab[3] en Com, $tab[4] en Droit, $tab[5] en Anglais, 
    $tab[6] en Lego, et c'est bien comme cela.";
    echo "<br>\n";
    echo "<br>\n";

    echo "PARTIE 2";
    echo "<br>\n";
    echo "En MMI, j’ai 7 matières, elles sont respectivement de 0 à 6 : 
    Maths, Prog, Réseau, Com, Droit, Anglais et Lego, et ";
    $tab=[11,13,14,16,17,14,18];
    for ($i=0; $i<7; $i++){
        echo "dans la matière $i, j’ai $tab[$i], ";}
        echo "et c'est bien comme cela.";
    echo "<br>\n";
    echo "<br>\n";

    $tabAsso=["Maths"=>11, "Prog"=>13, "Réseaux"=>14, "Com"=>16, "Droit"=>17, "Anglais"=>14, "Lego"=>18];
    echo "PARTIE 3";
    echo "<br>\n";
    echo "En MMI, j'ai ";
    foreach($tabAsso as $cle=>$element){
        echo "$element en $cle, ";
    }
    echo "et c'est bien comme cela."
?>
    </p>
</body>
</html>

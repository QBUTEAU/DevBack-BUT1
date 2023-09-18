<?php

/* $prenom = 'Corto'; $nom = 'Maltese'; $age = 30;
    $type = 'aventurier'; $sexe = 'M';
$prenom = 'M.'; $nom = 'Raspoutine'; $age = 50;
    $type = 'tueur'; $sexe = 'M';
$prenom = 'Pandora'; $nom = 'Groovesnore'; $age = 17;
    $type = 'fille de bonne famille'; $sexe = 'F';*/
$prenom = 'Shanghai'; $nom = 'Li'; $age = 25;
    $type = 'femme des triades'; $sexe = 'F';

switch(random_int(1,4)){
    case 1:
        $prenom = 'Corto'; $nom = 'Maltese'; $age = 30;
        $type = 'aventurier'; $sexe = 'M';
    break;
    case 2:
        $prenom = 'M.'; $nom = 'Raspoutine'; $age = 50;
        $type = 'tueur'; $sexe = 'M';
    break;
    case 3:
        $prenom = 'Pandora'; $nom = 'Groovesnore'; $age = 17;
        $type = 'fille de bonne famille'; $sexe = 'F';
    break;
    case 4:
        $prenom = 'Shanghai'; $nom = 'Li'; $age = 25;
        $type = 'femme des triades'; $sexe = 'F';
    break;
    default:;
}

echo "Je m'appelle $prenom $nom, je suis ";
if($sexe == 'M'){
    echo "un homme";
    if($age >= 18){
        echo " majeur";
    }
    else{
        echo " mineur";
    }
    echo " et je suis un $type.";
}
else{
    echo "une femme";
    if($age >= 18){
        echo " majeure";
    }
    else{
        echo " mineure";
    }
    echo " et je suis une $type.";
}

echo "<br>";
echo "<br>";
echo "RAFRAÎCHIR LA PAGE POUR METTRE UNE NOUVELLE PHRASE.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP3</title>
</head>
</html>
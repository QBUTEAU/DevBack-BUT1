<?php
        $tabMail = ['corto.maltese@univ-reims.fr', 'corto.maltese@gmail.com', 'pandora.groovesnore@univ-reims.fr',
                    'pandora.groovesnore@yahoo.fr', 'shanghai.li@univ-reims.fr', 'shanghai.li@hotmail.com', 'raspoutine@univ-reims.fr',
                    'raspoutine@yahoo.fr'];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TP7</title>
</head>
<body>
    <h1>La ballade de la mer salée</h1>
    <?php
        foreach($tabMail as $value){
            $domain = strstr($value, '@');
            if($domain == '@univ-reims.fr'){
                $tabMail2[] = $value;
            }

        }
        //ou
        /*$tabMail2 = [];
        for($i = 0; $i < count($tabMail); $i++){
            $domain = strstr($tabMail[$i], '@');
            if($domain == '@univ-reims.fr'){
                array_push($tabMail2, $tabMail[$i]);
            }
        } */

        for($i = 0; $i < count($tabMail2); $i++){
            echo $tabMail2[$i] . "<br>";
        }
    ?>
</body>
</html>
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET["nome"];
$mail = $_GET["mail"];
$age = $_GET["eta"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>

    <div>Nome: <strong><?php echo $name?></strong></div>
    <div>Mail: <strong><?php echo $mail?></strong></div>
    <div>Età: <strong><?php echo $age?></strong></div>

    <?php
        if(strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age) !== false ) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        };
    ?>


    <?php
    //altra versione
    
        // if (strlen($_GET["name"]) < 4) {
        //     echo "Accesso negato: il nome è minore di 4 caratteri";
        // } elseif (!strpos($_GET["mail"], ".")) {
        //     echo "Accesso negato: manca il punto nella mail";
        // } elseif (!strpos($_GET["mail"], "@")) {
        //     echo "Accesso negato: manca la @ nella mail";
        // } elseif (!is_numeric($_GET["eta"])) {
        //     echo "Accesso negato: l'età non è un numero";
        // } else {
        //     echo "Accesso riuscito";
        // }
    ?>

</body>
</html>
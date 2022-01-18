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

</body>
</html>
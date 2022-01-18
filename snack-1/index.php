<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->

<?php

$partite = [
    [
        "squadraCasa" => "Hapoel Holon",
        "squadraOspite" => "New Basket Brindisi",
        "puntiCasa" => 84,
        "puntiOspite" => 80
    ],
    [
        "squadraCasa" => "New Basket Brindisi",
        "squadraOspite" => "VL Pesaro",
        "puntiCasa" => 89,
        "puntiOspite" => 91
    ],
    [
        "squadraCasa" => "Universo Treviso",
        "squadraOspite" => "Brescia",
        "puntiCasa" => 69,
        "puntiOspite" => 94
    ],
    [
        "squadraCasa" => "Brescia",
        "squadraOspite" => "Cremona",
        "puntiCasa" => 86,
        "puntiOspite" => 73
    ],
    [
        "squadraCasa" => "Cantù",
        "squadraOspite" => "Bakery Piacenza",
        "puntiCasa" => 90,
        "puntiOspite" => 95
    ],
    [
        "squadraCasa" => "Blu Basket",
        "squadraOspite" => "Cantù",
        "puntiCasa" => 82,
        "puntiOspite" => 75
    ]
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Partite stagione 2021</h1>
    <ul>
        <?php
            for($i = 0; $i < count($partite); $i++) {
                echo 
                    "<li>
                        {$partite[$i]["squadraCasa"]} - 
                        {$partite[$i]["squadraOspite"]} | 
                        {$partite[$i]["puntiCasa"]} - 
                        {$partite[$i]["puntiOspite"]}
                    </li>";
            };
        ?>
    </ul>

    <!-- sintassi alternativa -->
    <ul>
        <?php for($i = 0; $i < count($partite); $i++) { ?>
            <li>
                <?php echo $partite[$i]["squadraCasa"];?> - 
                <?php echo $partite[$i]["squadraOspite"];?> | 
                <?php echo $partite[$i]["puntiCasa"];?> -
                <?php echo $partite[$i]["puntiOspite"];?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
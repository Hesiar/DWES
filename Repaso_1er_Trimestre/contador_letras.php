<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutas = ["manzana", "pera", "naranja", "melocoton", "platano","melon", "cereza"];
        $contador = 0;
        foreach ($frutas as $fruta){
            if(strlen($fruta)>5){
                echo $fruta . "\n";
                $contador ++;
            }
        }
        echo "Hay " . $contador . " frutas con mas de 5 letras";
    ?>
</body>
</html>
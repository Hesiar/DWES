<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        echo "<h1>Bucle for</h1>";

        for($i = 10; $i >= 0; $i--){
            echo $i," <br>";
        }

        echo "<h1>Bucle while</h1>";

        $m=1;

        while($m<=20){
            if( $m % 2 != 0){
                echo $m," <br>";
            }
            $m++;
        }

        echo "<h1>Bucle foreach</h1>";

        $colores =  ["rojo", "verde", "azul", "amarillo", "negro"];

        foreach ($colores as $color){
            echo $color," <br>";
        }

    ?>

</body>
</html>
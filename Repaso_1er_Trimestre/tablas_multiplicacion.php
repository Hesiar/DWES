<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Tablas de multiplicar";
        for($i=0; $i <= 10; $i++){
            echo "Tabla del $i: ";
            for($j=0; $j <= 10; $j++){
                $resultado = $i * $j;
                echo "$i x $j = $resultado <br>";
            }
        }
    ?>
</body>
</html>
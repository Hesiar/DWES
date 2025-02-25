<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>RA02_G</title>
</head>
<body>
    <h1>Valores de las Variables</h1>

    <?php

        $entera = 10;

        $decimal = 8.22;

        $booleano = true;

        $cadena = "cadena";

        define("PI", 3.14);

        echo "Valor de la variable entera: $entera <br>";
        echo "Valor de la variable decimal: $decimal <br>";
        echo "Valor de la variable booleana: " . ($booleano ? 'verdadero' : 'falso') . "<br>";
        echo "Valor de la variable cadena: $cadena <br>";
        echo "Valor de la constante PI: " . PI . "<br>";

        $suma = $entera + $decimal;
        echo "Resultado de la suma de la variable entera y la decimal: $suma";
    ?>
</body>
</html>

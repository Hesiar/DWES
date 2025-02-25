<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $productos = [
            ["nombre" => "Boligrafo", "precio" => 1],
            ["nombre" => "Pluma", "precio" => 2],
            ["nombre" => "Lapiz", "precio" => 0.5],
        ];
    ?>


    <button onclick="ponerCarrito()">Añadir</button>
</body>
</html>
<?php
    if (!defined('CON_CONTROLADOR')) {
        die('Error: No se puede acceder directamente a este archivo.');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>
    <style>
        p{
            font-size: 20px;
        }
        #no_disponible{
            color: red;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Artículos</h1>
    <ul>
        <?php foreach ($articulos as $articulo): ?>
            <li>
                <?php echo("<p>Articulo: ". $articulo['nombre'] . " | Precio: " . $articulo['precio'] . "€ | Categoría: "
                . $articulo['categoria'] . "</p>"); ?>
                <?php if($articulo['stock'] > 0){
                    echo("<p>Disponible</p>");
                }else{
                    echo("<p id='no_disponible'>No disponible</p>");
                } ?>
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
    <body>

    <h1>Enlace para Enviar Nombre</h1>

    <a href="?nombre=Armando">Haz clic aquí para ingresar</a>

    <?php

        if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {

            $nombre = htmlspecialchars($_GET['nombre']);
            echo "<h2>Bienvenido, $nombre</h2>";
        } elseif (isset($_GET['nombre'])) {
            echo "<h2>Nombre no especificado</h2>";
        }
    ?>

    </body>
</html>

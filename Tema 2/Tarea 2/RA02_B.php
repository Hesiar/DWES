<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartado B</title>
</head>
<body>
    <?php

        $archivo = 'productos.txt';

        if (file_exists($archivo)) {

            $handle = fopen($archivo, 'r');

            if ($handle) {
                echo '<table border="1">';
                echo '<tr><th>Nombre del Producto</th><th>Precio</th></tr>';

                while (($linea = fgets($handle)) !== false) {

                    list($nombre, $precio) = explode(',', trim($linea));
                    echo "<tr><td>$nombre</td><td>$precio</td></tr>";
                }

                echo '</table>';
                fclose($handle);

            } else {
                echo 'No se pudo abrir el archivo.';
            }
        } else {
            echo 'El archivo no existe.';
        }
    ?>

</body>
</html>

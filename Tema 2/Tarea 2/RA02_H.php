<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>RA02_H</title>
</head>
<body>
    <h1>RA02_H</h1>

    <?php

        $mensaje = "Bienvenido al sitio";

        function mostrar_mensaje() {

            global $mensaje;

            $mensaje_adicional = "Esperamos que disfrutes tu visita.";

            echo $mensaje . "<br>"; 
            echo $mensaje_adicional; 
        }

        mostrar_mensaje();
    ?>
</body>
</html>

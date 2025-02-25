<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
        <body>
            <?php

                // Creamos un bucle con for para contar desde 1 hasta 10
                for ($i = 1; $i <= 10; $i++) {
                    // Verificar si el número actual es par o impar mediante el uso del módulo
                    if ($i % 2 == 0) {
                        // En caso de que el número sea par, mostramos por pantalla lo siguiente

                        echo "Número $i: Es par<br>";
                    } else {
                        // Si el número es impar, mostramos este otro mensaje
                        echo "Número $i: Es impar<br>";
                    }
                }
            ?>

            <!-- Y con esto y un biscocho, hemos terminado la tarea -->

        </body>
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tarea 3 - Programación básica</title>
    </head>
<body>

    <h1>Tarea 3 - Programación básica</h1>

    <?php
        
        function generarArray($valor) {
            $numeros = [];
            for ($i = $valor; $i >= 0; $i -= 3) {
                $numeros[] = $i;
            }
            return $numeros;
        }

        function tabla($valores) {
            $html = "<table border='1'>\n";
            foreach ($valores as $valor) {
                $html .= "<tr><td>$valor</td></tr>\n";
            }
            $html .= "</table>";
            return $html;
        }

        if (isset($_POST['valor'])) {
            $valor = $_POST['valor'];

            if ($valor === "") {
                echo "<h2>Introduzca un valor</h2>";
            } elseif (!is_numeric($valor)) {
                echo "<h2>Introduzca un valor numérico</h2>";
            } elseif ($valor < 0) {
                echo "<h2>Introduzca un valor positivo</h2>";
            } elseif ($valor == 0 || ($valor > 0 && $valor <= 10)) {
                $numeros = generarArray($valor);
                echo "<h2>Valores generados:</h2>";
                echo tabla($numeros);
            } elseif ($valor > 10) {
                echo "<h2>Número demasiado grande</h2>";
            } else {
                echo "<h2>Valor desconocido</h2>";
            }
        } else {
            echo "<h2>No se ha introducido ningún valor</h2>";
        }
    ?>

    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <label for="valor">Introduzca un valor:</label>
        <input type="text" id="valor" name="valor">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>

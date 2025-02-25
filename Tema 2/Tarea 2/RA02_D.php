<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simple</title>
</head>
<body>
    <h1>Calculadora</h1>
    
    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>

        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los valores del formulario
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];
            $resultado = '';

            if (is_numeric($numero1) && is_numeric($numero2)) {

                switch ($operacion) {
                    case 'sumar':
                        $resultado = $numero1 + $numero2;
                        break;
                    case 'restar':
                        $resultado = $numero1 - $numero2;
                        break;
                    case 'multiplicar':
                        $resultado = $numero1 * $numero2;
                        break;
                    case 'dividir':
                        if ($numero2 != 0) {
                            $resultado = $numero1 / $numero2;
                        } else {
                            $resultado = "Error: No se puede dividir por cero.";
                        }
                        break;
                    default:
                        $resultado = "Operación no válida.";
                        break;
                }

                echo "<h2>Resultado: $resultado</h2>";
            } else {
                echo "<h2>Error: Ingrese números válidos.</h2>";
            }
        }
    ?>
</body>
</html>

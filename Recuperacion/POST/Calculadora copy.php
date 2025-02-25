<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora básica</h1>
    <form action="" method="post">
        <label for="num1">Introduce el primer número:</label>
        <input type="number" id="num1" name="num1"><br><br>
        <label for="num2">Introduce el segundo número:</label>
        <input type="number" id="num2" name="num2"><br><br>
        <label for="operacion">Elige una operación:</label>
        <select id="operacion" name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operador = $_POST['operacion'];
            $resultado = 0;

            switch($operador){
                case "suma":
                    $resultado = $num1 + $num2;
                    echo "<p>El resultado de la suma de $num1 y $num2 es: $resultado</p>";
                    break;
                case "resta":
                    $resultado = $num1 - $num2;
                    echo "<p>El resultado de la resta de $num1 y $num2 es: $resultado</p>";
                    break;
                case "multiplicar":
                    $resultado = $num1 * $num2;
                    echo "<p>El resultado de la multiplicación de $num1 y $num2 es: $resultado</p>";
                    break;
                case "dividir":
                    if($num2 != 0){
                        $resultado = $num1 / $num2;
                        echo "<p>El resultado de dividir $num1 entre $num2 es: $resultado</p>";
                        break;
                    }else{
                        echo "<p>No se puede dividir por cero</p>";
                    }
            }
        }
    ?>
</body>
</html>
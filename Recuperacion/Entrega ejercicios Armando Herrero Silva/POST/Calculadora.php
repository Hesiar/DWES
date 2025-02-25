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
        <div>
            <label for="entrada1">Introduzca el primer número: </label>
            <input type="number" id="entrada1" name="entrada1" required>
        </div><br>
        <div>
            <label for="entrada2">Introduzca el segundo número: </label>
            <input type="number" id="entrada2" name="entrada2" required>
        </div><br>
        <div>
            <label for="operador">Seleccione el operador: </label>
            <select name="operador" id="operador">
                <option value="suma">Sumar</option>
                <option value="resta">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select><br>
        </div>
        <button type="submit">Calcular</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $num1 = $_POST['entrada1'];
            $num2 = $_POST['entrada2'];
            $operacion = $_POST['operador'];
            $resultado = null;

            switch($operacion){
                case 'suma':
                    $resultado = $num1 + $num2;
                    break;
                case 'resta':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicar':
                    $resultado = $num1 * $num2;
                    break;
                case 'dividir':
                    if($num2 != 0){
                        $resultado = $num1 / $num2;
                    }else{
                        $resultado = "Error: No se puede dividir por cero";
                    }
                    break;
                default:
                    $resultado = "Error: Operación no válida";
                    break;
            }

            if($resultado!=null){
                echo "<p>El resultado de la operación es: $resultado</p>";
            }else{
                echo "<p></p>";
            }
        }
    ?>
</body>
</html>
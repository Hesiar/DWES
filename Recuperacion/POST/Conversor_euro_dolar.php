<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor simple</title>
</head>
<body>
    <h1>Conversor de moneda (€, $)</h1>
    <form action="" method="post">
        <div>
            <label for="cantidad">Introduce la cantidad que deseas convertir: </label><br>
            <input type="number" id="cantidad" name="cantidad" step="0.01" required>
            <select name="simbolo" id="simbolo">
                <option value="€">€</option>
                <option value="$">$</option>
            </select>
        </div><br>

        <button type="submit">Calcular</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $cantidad = $_POST['cantidad'];
            $simbolo = $_POST['simbolo'];
            $resultado = null;
            if($simbolo =='€'){
                $resultado = $cantidad * 1.0299;
                echo "<p>La cantidad de $cantidad$simbolo equivale a $resultado$";
            }elseif($simbolo == '$'){
                $resultado = $cantidad * 0.9705;
                echo "<p>La cantidad de $cantidad$simbolo equivale a $resultado"."€";
            }
        }
    ?>
</body>
</html>
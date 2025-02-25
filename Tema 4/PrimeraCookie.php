<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor_cookie = "Esto es una cookie";
        setcookie("Mi_primera_cookie", $valor_cookie, time() + 60);
        if(isset($_COOKIE["Mi_primera_cookie"])){
            echo "<h3>Valor de la cookie:</h3>".$_COOKIE["Mi_primera_cookie"];
        }else {
            echo "No hay ninguna cookie almacenada.";
        }

    ?>
</body>
</html>
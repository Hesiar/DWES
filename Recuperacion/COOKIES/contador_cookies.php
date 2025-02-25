<?php
    if(isset($_COOKIE['visitas'])){
        $visitas = $_COOKIE['visitas'] + 1;
        $veces = "veces";
    }else{
        $visitas = 1;
        $veces = "vez";
    }

    setcookie('visitas', $visitas, time() + (60*60*24*30));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>¡HOLA!</h1>
    <p>Has visitado esta página <?php echo $visitas ?> <?php echo $veces ?>.</p>
</body>
</html>
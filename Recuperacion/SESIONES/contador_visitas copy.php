<?php
    session_start();
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 1;
        $veces = "vez";
    }else{
        $_SESSION['contador'] += 1;
        $veces = "veces";
    }

    $contador = $_SESSION['contador'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Gracias por visitar nuestra web</h1>
    <p>Durante esta sesión se ha visitado esta web <?php echo $contador; ?> <?php echo $veces; ?></p>
</body>
</html>
<?php

    session_start();

    if (!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 1;
        $visitas = "visita";
    }else {
        $_SESSION['contador'] += 1;
        $visitas = "visitas";
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
    <h1>Contador de visitas</h1>
    <p>Actualmente esta página tiene un total de <?php echo $contador; ?> <?php echo $visitas; ?></p>
</body>
</html>
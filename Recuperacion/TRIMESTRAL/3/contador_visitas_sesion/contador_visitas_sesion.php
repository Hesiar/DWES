<?php
    session_start();
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 1;
        $veces = 'vez';
    }else{
        $_SESSION['contador'] ++;
        $veces = 'veces';
    }

    $contador = $_SESSION['contador'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotnador</title>
</head>
<body>
    <h1>Contador</h1>
    <p>Has visitado la pagina <?php echo $contador; ?> <?php echo $veces; ?>.</p>
</body>
</html>
<?php
    session_start();
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador']=1;
        $veces = 'vez';
    }else{
        $_SESSION['contador']++;
        $veces = 'veces';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas en sesión</title>
</head>
<body>
    <h1>Contador de visitas durante esta sesión</h1>
    <p>Se ha visitado esta página <?php echo $_SESSION['contador']; ?> <?php echo $veces; ?> durante esta sesión.</p>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if($_POST['aceptar']){
            setcookie('aceptada', 'true', time() + (60*60*24*30));
            header('Location: '.$_SERVER['PHP_SELF']);
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Primera Vez</title>
</head>
<body>
    <?php if(!isset($_COOKIE['aceptada'])): ?>
        <p>Esta es la primera vez que visitas este sitio web. Por favor, acepta la cookie.</p>
        <form action="" method="post">
            <input type="submit" name="aceptar" value="Aceptar">
        </form>
    <?php else: ?>
        <p>Ya aceptaste la cookie inicial</p>
        <h1>¡HOLA DE NUEVO!</h1>
    <?php endif; ?>
</body>
</html>
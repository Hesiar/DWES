<?php
    session_start();

    $mensaje = '';

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['usuario'])){
        $usuario = $_POST['usuario'];
        
        setcookie('Recordatorio', $usuario, time() + (60*60*24*30));

        $mensaje = "Se ha iniciado sesión con éxito con el usuario <strong>$usuario</strong>";

    }elseif (isset($_COOKIE['Recordatorio'])) {

        $mensaje = "Bienvenido de nuevo, <strong>".$_COOKIE['Recordatorio']."</strong>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recordar</title>
</head>
<body>
    <form action="" method="post">
        <label for="usuario">Nombre de usuario: </label>
        <input type="text" name="usuario" id="usuario">
        <button type="submit">Enviar</button>
    </form>
    <p><?php echo $mensaje; ?></p>
</body>
</html>
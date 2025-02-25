<?php
    session_start();
    
    if(isset($_SESSION['usuario'])){
        header("Location: protegido.php");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        if(isset($usuario) && isset($contraseña)){
            $_SESSION['usuario'] = $usuario;
            header("Location: protegido.php");
            exit();
        }else{
            $error = "Nombre de usuario o contraseña incorrectos";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticación Usuario</title>
</head>
<body>
    <h1>¡Bienvenido!</h1>
    <h3>Introduzca sus credenciales</h3>
    <form action="" method="post">
        <label for="usuario">Nombre de usuario: </label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="contraseña" method="post">Contraseña: </label>
        <input type="password" id="contraseña" name="contraseña" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        header("Location: autenticacion_usuario.php");
        exit();
    }

    $usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($usuario); ?></h1>
    <p>Si estas viendo esta página es porque estas registrado</p> 
</body>
</html>
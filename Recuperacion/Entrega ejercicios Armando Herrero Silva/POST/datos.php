<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <h1>Datos del usuario</h1>
    <p><strong>Nombre: </strong><?php echo htmlspecialchars($_POST['nombre']); ?></p>
    <p><strong>Correo: </strong><?php echo htmlspecialchars($_POST['correo']); ?></p>
    <p><strong>Contraseña: </strong><?php echo htmlspecialchars($_POST['password']); ?></p>
</body>
</html>
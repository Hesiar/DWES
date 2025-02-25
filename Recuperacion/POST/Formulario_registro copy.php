<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario_registro</title>
</head>
<body>
    <form action="datos2.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="correo">Correo: </label>
        <input type="text" id="correo" name="correo" required>
        <label for="contraseña">Contraseña: </label>
        <input type="password" id="contraseña" name="contraseña" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
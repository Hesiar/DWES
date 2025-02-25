<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario_registro</title>
</head>
<body>
    
    <form action="datos.php" method="post">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required>
        </div><br>
        <div>
            <label for="correo">Correo: </label>
            <input type="text" id="correo" name="correo" required>
        </div><br>
        <div>
            <label for="password">Contraseña: </label>
            <input type="password" id="password" name="password" required>
        </div><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>
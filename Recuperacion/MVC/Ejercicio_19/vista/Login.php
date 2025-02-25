<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="login.php" method="POST">
        <label>Usuario:</label>
        <input type="text" name="username" required><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>

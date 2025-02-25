<?php
session_start();

$usuarios = [
    'admin' => ['password' => 'admin123', 'rol' => 'administrador'],
    'user' => ['password' => 'user123', 'rol' => 'usuario']
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($usuarios[$usuario]) && $usuarios[$usuario]['password'] === $password) {

        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $usuarios[$usuario]['rol'];

        if ($_SESSION['rol'] === 'administrador') {
            header("Location: admin.php");
            exit();
        } elseif ($_SESSION['rol'] === 'usuario') {
            header("Location: user.php");
            exit();
        }
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Inicio de Sesión</h2>
    <?php if (!empty($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="login.php">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="rol">Rol:</label><br>
        <select id="rol" name="rol" required>
            <option value="administrador">Administrador</option>
            <option value="usuario">Usuario</option>
        </select><br><br>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>

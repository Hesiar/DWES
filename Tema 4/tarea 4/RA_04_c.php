<?php
session_start();

$telefono = $_SESSION['telefono'] ?? '';
$email = $_SESSION['email'] ?? '';
$horarioSeleccionado = $_COOKIE['horario'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['grabar']) && !empty($_POST['telefono']) && !empty($_POST['email'])) {
        $_SESSION['telefono'] = $_POST['telefono'];
        $_SESSION['email'] = $_POST['email'];
    } elseif (isset($_POST['grabar'])) {
        echo "<p style='color:red;'>Ambos campos son obligatorios.</p>";
    }

    if (isset($_POST['grabar_horario']) && isset($_POST['horario'])) {
        setcookie('horario', $_POST['horario'], time() + 3600); 
        $horarioSeleccionado = $_POST['horario'];
    }

    if (isset($_POST['borrar'])) {
        session_unset();
        session_destroy();
        setcookie('horario', '', time() - 3600); 
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión</title>
</head>
<body>
    <form method="post" action="sesion.php">
        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>

        <label for="horario">Horario:</label><br>
        <select id="horario" name="horario">
            <option value="Mañana" <?php echo ($horarioSeleccionado === 'Mañana') ? 'selected' : ''; ?>>Mañana</option>
            <option value="Tarde" <?php echo ($horarioSeleccionado === 'Tarde') ? 'selected' : ''; ?>>Tarde</option>
            <option value="Noche" <?php echo ($horarioSeleccionado === 'Noche') ? 'selected' : ''; ?>>Noche</option>
        </select><br><br>

        <button type="submit" name="grabar">Grabar</button>
        <button type="submit" name="grabar_horario">Grabar horario</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
</body>
</html>

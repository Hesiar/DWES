<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web dinámica</title>
</head>
<body>
    <h1>Fecha Actual</h1>
    <p><?php echo date('d/m/Y'); ?></p>

    <h2>Ingresa tu Nombre</h2>
    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = htmlspecialchars($_POST['nombre']);
            echo "<h2>Hola, $nombre</h2>";
        }
    ?>
</body>
</html>
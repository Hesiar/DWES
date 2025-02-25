<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Comentarios</title>
</head>
<body>
    <h1>Comentarios</h1>
    <form action="agregar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre_usuario" required><br>
        <label>Comentario:</label>
        <textarea name="comentario" required></textarea><br>
        <input type="submit" value="Enviar">
    </form>

    <h2>Todos los Comentarios</h2>
    <ul>
        <?php foreach ($comentarios as $comentario): ?>
            <li>
                <strong><?php echo $comentario['nombre_usuario']; ?>:</strong>
                <p><?php echo $comentario['comentario']; ?></p>
                <small><?php echo $comentario['fecha']; ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

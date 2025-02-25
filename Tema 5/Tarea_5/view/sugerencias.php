<?php
    if (!defined('CON_CONTROLADOR')) {
        die('Error: No se puede acceder directamente a este archivo.');
    }
?>

<h1>Añadir Nueva Sugerencia</h1>
<form method="POST" action="index.php?action=guardar_sugerencia">
    <textarea name="sugerencia" rows="4" cols="50" required></textarea>
    <br>
    <button type="submit">Guardar</button>
</form>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerencias</title>
</head>
<body>
    <h1>Lista de Sugerencias</h1>
    <ul>
        <?php foreach ($sugerencias as $sugerencia): ?>
            <li><?php echo htmlspecialchars($sugerencia); ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?action=nueva_sugerencia">Añadir una nueva sugerencia</a>
    <h1>Añadir Nueva Sugerencia</h1>
    <form method="POST" action="index.php?action=guardar_sugerencia">
        <textarea name="sugerencia" rows="4" cols="50" required></textarea>
        <br>
        <button type="submit">Guardar</button>
    /form>
</body>
</html>
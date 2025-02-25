<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Producto</h1>
    <form action="agregar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea><br>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>

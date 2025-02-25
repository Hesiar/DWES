<?php
    require_once 'ModeloProducto.php';
    $modelo = new ModeloProducto();
    $producto = $modelo->obtenerProducto($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion" required><?= $producto['descripcion'] ?></textarea><br>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>

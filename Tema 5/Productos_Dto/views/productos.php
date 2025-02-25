<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio Original</th>
            <th>Precio con Descuento</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['name']);?></td>
                <td><?php echo $product['price'];?> €</td>
                <td><?php echo $product['price'] * 0.9;?> €</td>
            </tr>
        <?php endforeach ?>
    </table>

    <h2>Añadir producto</h2>
    <form method="post" action="?action=add">
        <input type="text" name="name" placeholder="Nombre del producto" required>
        <input type="number" name="price" placeholder="Precio del producto" required>
        <button type="submit">Añadir</button>
    </form>
</body>
</html>
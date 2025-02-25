<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <?php
        $productos = [
            ['nombre' => 'Camisa', 'precio' => 10.99, 'cantidad' => 5],
            ['nombre' => 'Pantalones', 'precio' => 19.99, 'cantidad' => 3],
            ['nombre' => 'Zapatillas', 'precio' => 29.99, 'cantidad' => 2],
            ['nombre' => 'Gorra', 'precio' => 4.99, 'cantidad' => 10],
            ['nombre' => 'Pantalones', 'precio' => 19.99, 'cantidad' => 3]
        ];
    ?>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Valor total</th>
        </tr>
        <?php
            foreach($productos as $producto){
                $valor_total = $producto['precio'] * $producto['cantidad'];
                echo "<tr><td>{$producto['nombre']}</td><td>{$producto['precio']}</td><td>{$producto['cantidad']}</td><td>$valor_total</td></tr>";
            }
        ?>
</body>
</html>
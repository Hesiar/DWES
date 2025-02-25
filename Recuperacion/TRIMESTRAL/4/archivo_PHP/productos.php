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
            ['nombre' => 'Camisa', 'precio' => 9.99, 'cantidad' => 10],
            ['nombre' => 'Pantalón', 'precio' => 19.99, 'cantidad' => 5],
            ['nombre' => 'Zapatillas', 'precio' => 29.99, 'cantidad' => 15],
            ['nombre' => 'Gorra', 'precio' => 4.99, 'cantidad' => 20],
            ['nombre' => 'Remera', 'precio' => 14.99, 'cantidad' => 8]
        ];
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Valor total</th>
        </tr>
        <?php
            foreach($productos as $producto){
                $valor_total = $producto['precio']*$producto['cantidad'];
                echo "<tr><td>$producto[nombre]</td><td>$producto[precio]</td><td>$producto[cantidad]</td><td>$valor_total</td></tr>";
            }
        ?>
</body>
</html>
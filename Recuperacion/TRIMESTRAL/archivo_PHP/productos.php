<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $productos = [
            ["nombre" => "Producto 1", "precio" => 10.99, "stock" => 100],
            ["nombre" => "Producto 2", "precio" => 5.99, "stock" => 50],
            ["nombre" => "Producto 3", "precio" => 7.99, "stock" => 75]
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
                $valor_total = $producto['precio']*$producto['stock'];
                echo"<tr>
                        <td>{$producto['nombre']}</td>
                        <td>{$producto['precio']}</td>
                        <td>{$producto['stock']}</td>
                        <td>{$valor_total}</td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>
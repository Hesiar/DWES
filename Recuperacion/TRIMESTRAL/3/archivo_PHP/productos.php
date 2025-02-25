<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $productos = [
            ["nombre" => "Libro", "precio" => 22.5, "stock" => 20],
            ["nombre" => "Lapicera", "precio" => 5.5, "stock" => 15],
            ["nombre" => "Boligrafo", "precio" => 10.5, "stock" => 100]
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
                $total = $producto["precio"] * $producto["stock"];
                echo "<tr><td>$producto[nombre]</td><td>$producto[precio]</td><td>$producto[stock]</td><td>$total</td></tr>";
            }
        ?>
    </table>
</body>
</html>
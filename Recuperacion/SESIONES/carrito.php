<?php
    session_start();

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $carrito = $_SESSION['carrito'];

    $precio_libro = 25;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $accion = $_POST['accion'] ?? '';

        if ($accion === 'añadir') {
            if (isset($carrito['libro'])) {
                $carrito['libro']++;
            } else {
                $carrito['libro'] = 1;
            }
        } elseif ($accion === 'eliminar') {
            if (isset($carrito['libro']) && $carrito['libro'] > 0) {
                $carrito['libro']--;
                if ($carrito['libro'] === 0) {
                    unset($carrito['libro']);
                }
            }
        }

        $_SESSION['carrito'] = $carrito;
    }

    $total = isset($carrito['libro']) ? $carrito['libro'] * $precio_libro : 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>Libro</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="libro">Libro</label>
                <span>25€</span>
                <button type="submit" name="accion" value="añadir">Añadir</button>
                <button type="submit" name="accion" value="eliminar">Eliminar</button>
            </li>
        </ul>
    </form>
    <h2>Carrito</h2>
    <ul>
        <?php
        if (empty($carrito)) {
            echo "<li>El carrito está vacío.</li>";
        } else {
            echo "<li>Libro: {$carrito['libro']} unidad(es) ---> " . ($precio_libro * $carrito['libro']) . "€</li>";
        }
        ?>
    </ul>
    <h3>Total: <?php echo $total; ?>€</h3>
</body>
</html>

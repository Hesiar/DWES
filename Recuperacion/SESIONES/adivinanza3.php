<?php
    session_start();

    $mensaje = "";

    if (!isset($_SESSION['solucion'])) {
        $_SESSION['solucion'] = rand(1, 100);
    }

    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['intento'])){
        $solucion = $_SESSION['solucion'];
        $intentos = $_POST['intento'];

        if($solucion>$intentos){
            $mensaje = "Intenta de nuevo, la solución es mayor a $intentos";
        }elseif($solucion<$intentos){
            $mensaje = "Intenta de nuevo, la solución es menor a $intentos";
        }elseif($solucion==$intentos){
            $mensaje = "¡Lo lograste! La solución era $intentos";
            unset($_SESSION['solucion']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinanza</title>
</head>
<body>
    <h1>Adivina el número entre 1 y 100</h1>
    <form action="" method="post">
        <label for="intento">¿Qué número he pensado?</label>
        <input type="number" id="intento" name="intento">
        <input type="submit" value="Intentar">
    </form>
    <p><?php echo $mensaje; ?></p>
</body>
</html>
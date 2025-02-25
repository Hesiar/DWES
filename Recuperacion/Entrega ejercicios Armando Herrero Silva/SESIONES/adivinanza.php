<?php
    session_start();

    $mensaje = "";

    if (!isset($_SESSION['solucion'])) {
        $_SESSION['solucion'] = rand(1, 100);
    }

    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['adivina'])){
        $respuesta = $_POST['adivina'];
        $solucion = $_SESSION['solucion'];
        if($respuesta == $solucion){
            $mensaje="<p><strong>Lo lograste!</strong></p>\nLa respuesta era $solucion</p>";
            unset($_SESSION['solucion']);
        }else{
            $mensaje="<p><strong>Lo siento, no es correcto</strong></p>";                
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
    <form action="" method="post">
        <label for="adivina">¿En qué número estoy pensando del 1 al 10?</label>
        <input type="number" id="adivina" name="adivina">
        <button type="submit">Adivinar</button>
    </form>
    <p><?php echo $mensaje; ?></p>
</body>
</html>
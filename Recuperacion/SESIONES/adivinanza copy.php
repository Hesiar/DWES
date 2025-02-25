<?php
    session_start();
    $mensaje = "";
    $mensaje2 = "";

    if(!isset($_SESSION['aleatorio'])){
        $_SESSION['aleatorio']=rand(1, 10);
    }
    
    $numero = $_SESSION['aleatorio'];
        
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $numeroIngresado = $_POST['numero'];
        if($numeroIngresado == $numero){
            $mensaje = "¡Lo lograste!";
            $mensaje2 = "El número correcto era $numero";
            unset($_SESSION['aleatorio']);
        }else{
            $mensaje = "Lo siento, el número ingresado no es correcto.";
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
    <form action="" method='post'>
        <label for="pregunta">Adivina un numero entre el 1 y el 10</label>
        <input type="number" id="numero" name="numero">
        <button type="submit">Adivinar</button>
    </form>
    <p><?php echo $mensaje; ?></p>
    <p><?php echo $mensaje2; ?></p>
</body>
</html>
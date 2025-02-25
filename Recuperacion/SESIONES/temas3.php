<?php
    session_start();

    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['tema'])){
        $_SESSION['tema'] = $_POST['tema'];
    }

    if($_SESSION['tema']=='oscuro'){
        $fondo = 'black';
        $fuente = 'white';
    }elseif($_SESSION['tema']=='claro'){
        $fondo = 'white';
        $fuente = 'black';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas</title>
</head>
<style>
    body{
        background-color: <?php echo $fondo; ?>;
        color: <?php echo $fuente; ?>;
    }
</style>
<body>
    <h3>¿Team OSCURO o Team CLARO?</h3>
    <form action="" method="post">
        <input type="radio" name="tema" value="oscuro" <?php if($_SESSION['tema']=="oscuro"): echo 'checked'; endif ?>>Team OSCURO
        <input type="radio" name="tema" value="claro" <?php if($_SESSION['tema']=="claro"): echo 'checked'; endif ?>>Team CLARO
        <input type="submit" value="Elegir">
    </form>
</body>
</html>
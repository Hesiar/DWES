<?php
    session_start();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $tema = $_POST['tema'];
        if($tema=='Oscuro'){
            $fondo = 'black';
            $color = 'white';
        }elseif($tema=='Claro'){
            $fondo = 'white';
            $color = 'black';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas</title>
    <style>
        body {
            background-color: <?php echo $fondo; ?>;
            color: <?php echo $color; ?>;
        }
    </style>
</head>
<body>
    <h1>Elección de temas con sesiones</h1>
    <form action="" method='post'>
        <input type="radio" name="tema" value="Oscuro" <?php if($tema=='Oscuro'):echo 'checked'; endif; ?>>Oscuro
        <input type="radio" name="tema" value="Claro" <?php if($tema=='Claro'):echo 'checked'; endif ?>>Claro
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
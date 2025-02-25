<?php
    session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['tema'])){
        $_SESSION['tema'] = $_POST['tema'];
    }

    if($_SESSION['tema']=="oscuro"){
        $color = "white";
        $fondo = "black";
    }elseif($_SESSION['tema']=="claro"){
        $color = "black";
        $fondo = "white";
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
        color: <?php echo $color; ?>;
    }
</style>
<body>
    <h1>¿Prefieres el tema claro o el oscuro?</h1>
    <form action="" method="post">
        <input type="radio" name="tema" value="claro" <?php if($_SESSION['tema']=="claro"): echo 'checked'; endif ?>>Claro 
        <input type="radio" name="tema" value="oscuro"<?php if($_SESSION['tema']=="oscuro"): echo 'checked'; endif?>>Oscuro
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
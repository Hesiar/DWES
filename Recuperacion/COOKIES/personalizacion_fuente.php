<?php
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['fuente'])){
        $fuente = $_POST['fuente'];
        setcookie('fuente', $fuente, time() + (60*60*24*30));
    }else{
        if (isset($_COOKIE['fuente'])) {
            $fuente = $_COOKIE['fuente'];
        } else {
            $fuente = 'Times New Roman';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalización de fuentes</title>
    <style>
        body {
        font-family: <?php echo $_POST['fuente']; ?>;
        }
    </style>
</head>
<body>
    <h1>Personaliza la fuente de los textos</h1>
    <p>Esto es un texto simple.</p>
    <form action="" method="post">
        <label for="fuente">Elige una fuente:</label>
        <input type="radio" name="fuente" value="Arial" <?php if($fuente == 'Arial') echo 'checked'; ?>>Arial
        <input type="radio" name="fuente" value="Times New Roman" <?php if($fuente == 'Times New Roman') echo 'checked'; ?>>Times New Roman
        <input type="radio" name="fuente" value="Courier New" <?php if($fuente == 'Courier New') echo 'checked'; ?>>Courier New
        <input type="radio" name="fuente" value="Verdana" <?php if($fuente == 'Verdana') echo 'checked'; ?>>Verdana
        <input type="submit" value="Seleccionar">
    </form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['idioma'] == "español"){
            setcookie('idioma', 'español', time() + (60*60*24*30));
        } elseif($_POST['idioma'] == "ingles"){
            setcookie('idioma', 'ingles', time() + (60*60*24*30));
        }
        // Al seleccionar una opcion habia que hacerlo dos veces o recargar la página
        //  por ello he preguntado en ChatGPT y para que se haga correctamente hay que
        // poner lo siguiente para que se recargue la página tras crear la cookie
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencia</title>
</head>
<body>
    <?php if(isset($_COOKIE['idioma']) && $_COOKIE['idioma'] == 'español'): ?>
        <form action="" method="post">
            <label for="pregunta">Selecciona el idioma: </label>
            <input type="radio" name="idioma" value="español" checked>Español
            <input type="radio" name="idioma" value="ingles">Inglés
            <input type="submit" value="Seleccionar">
        </form>
        <p>Este texto está en español</p>
    <?php elseif(isset($_COOKIE['idioma']) && $_COOKIE['idioma'] == 'ingles'): ?>
        <form action="" method="post">
            <label for="pregunta">Select a language: </label>
            <input type="radio" name="idioma" value="ingles" checked>English
            <input type="radio" name="idioma" value="español">Spanish
            <input type="submit" value="Select">
        </form>
        <p>This text is in English</p>
    <?php else: ?>
        <form action="" method="post">
            <label for="pregunta">Selecciona el idioma: </label>
            <input type="radio" name="idioma" value="español">Español
            <input type="radio" name="idioma" value="ingles">Inglés
            <input type="submit" value="Seleccionar">
        </form>
    <?php endif; ?>
</body>
</html>

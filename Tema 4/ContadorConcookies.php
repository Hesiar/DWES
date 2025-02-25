<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        session_start();
        
        if (!isset($_SESSION['visitas'])) {
            $_SESSION['visitas'] = 0;
        }
        
        $_SESSION['visitas']++;
        
        echo "Número de visitas: " . $_SESSION['visitas']."<br>";
        echo "ID de la sesión: " .  session_id() . "<br>";
        echo "Nombre de la sesión: " . session_name();

    ?>
</body>
</html>
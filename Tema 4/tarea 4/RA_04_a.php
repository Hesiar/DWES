<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RA_04 a</title>
</head>
<body>
    <?php

        session_start();

        if (isset($_SESSION['contador_visitas'])) {
            $_SESSION['contador_visitas']++;
        } else {
            $_SESSION['contador_visitas'] = 1;
        }

        echo "<h1>Bienvenido</h1>";
        echo "<p>Esta página ha sido visitada un total de " . $_SESSION['contador_visitas'] . " veces.</p>";
        
    ?>

</body>
</html>
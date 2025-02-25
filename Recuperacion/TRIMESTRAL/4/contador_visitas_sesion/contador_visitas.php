<?php
    session_start();

    if (!isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 1;
        $veces = 'vez';
    } else {
        $_SESSION['contador']++;
        $veces = 'veces';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Esto es un contador</h1>
    <p>Has visitado la página <?php echo $_SESSION['contador']; ?> <?php echo $veces; ?>.</p>
</body>
</html>

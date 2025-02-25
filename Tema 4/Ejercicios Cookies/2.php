<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body.claro {
            background-color: white;
            color: black;
        }
        
        body.oscuro {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body class="<?php echo isset($_COOKIE['oscuro']) ? 'oscuro' : 'claro'; ?>">
    <?php
        session_start();

        $claro = "modo claro";
        $oscuro = "modo oscuro";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_COOKIE["oscuro"])) {
                setcookie("oscuro", "", time() - 1); 
                setcookie("claro", $claro, time() + 2592000); 
            } else {
                setcookie("claro", "", time() - 1); 
                setcookie("oscuro", $oscuro, time() + 2592000); 
            }

            header("Refresh:0");
            exit;
        }

        if (isset($_COOKIE["oscuro"])) {
            echo "Estás en modo oscuro.<br>";
        } else {
            echo "Estás en modo claro.<br>";
        }
    ?>
    
    <form method="POST">
        <?php
            if (isset($_COOKIE["oscuro"])) {
                echo "<button type='submit'>Modo claro</button>";
            } else {
                echo "<button type='submit'>Modo oscuro</button>";
            }
        ?>
    </form>
</body>
</html>

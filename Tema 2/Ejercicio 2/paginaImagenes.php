<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
    <style>
        body{
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="color: white">¡Vamos a cocinar algo rico! &#128521;</h1>
    </header>
    <?php
        include("navegation.php");
    ?>

    <?php
        $imagenes = [
            "bimbo.png",
            "curry.png",
            "tortitas.png"
        ];
        foreach ($imagenes as $imagenes) {
            echo "<div><img src='$imagenes'></div>";
        }
    ?>
    <?php
        include("footer.php");
    ?>

</body>
</html>
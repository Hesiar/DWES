<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>¿Cual es tu edad?</label><br><br>
        <input type="number" id="edad" name="edad" placeholder="Introduzca su edad" > 
        <button>Enviar</button>
    </form>

    <?php

        if (isset($_POST["edad"])){

            if($_POST["edad"]>=0 && $_POST["edad"]<13){
                echo "<br>Infancia";
            }elseif ($_POST["edad"]>=13 && $_POST["edad"]<=29){
                echo "<br>Juventud";
            }elseif  ($_POST["edad"]>=30 && $_POST["edad"]<=64){
                echo "<br>Adultez";
            }elseif ($_POST["edad"]>=65 && $_POST["edad"]<=100){
                echo "<br>Tercera edad";
            }else if($_POST["edad"]<0 &&  $_POST["edad"]>100){
                echo "<br>Debe introducir un numero entre 0 y 100";
            }
        }else {
            echo "<br>No has introducido un numero";
        }
        
    ?>

</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]===  "POST"){
        $color_escogido = $_POST["color"];
            echo "Has elegido el color: $color_escogido<br>";
            echo "<div style='width:100px; height:100px; background-color:$color_escogido;'></div>";
    }
?>
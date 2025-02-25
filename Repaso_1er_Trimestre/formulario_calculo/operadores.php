<?php
    if($_SERVER["REQUEST_METHOD" === "POST"]){
        $numero1= $_POST["num1"];
        $numero2= $_POST["num2"];
        $operador= $_POST["operador"];

        switch ($operador){
            case "+":
                $resultado = $numero1 + $numero2;
                break;
            case "-":
                $resultado = $numero1 - $numero2;
                break;
            case "*":
                $resultado = $numero1 * $numero2;
                break;
            case "/":
                $resultado = $numero1 / $numero2;
                break;   
        }
        echo "El resultado es: $resultado";
    }
?>
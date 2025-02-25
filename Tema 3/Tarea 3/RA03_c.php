<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function generarArray($valor) {
            $numeros = []; 

            for ($i = $valor; $i >= 0; $i -= 3) {
                $numeros[] = $i; 
            }

            return $numeros; 
        }

        $valor = 15;
        $resultado = generarArray($valor);
        print_r($resultado); 
    ?>

</body>
</html>
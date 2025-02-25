<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function tabla($valores) {
            $html = "<table border='1'>\n"; 
            foreach ($valores as $valor) {
                $html .= "<tr><td>$valor</td></tr>\n"; 
            }

            $html .= "</table>"; 
            return $html; 
        }

        $numeros = [15, 12, 9, 6, 3, 0];
        echo tabla($numeros);

    ?>

</body>
</html>
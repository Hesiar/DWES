<?php
// 1. CALCULO DEL AREA DE UN CIRCULO

function calcularAreaCirculo($radio) {

    $area = pi() * pow($radio, 2);
    return $area;

}

?>

<?php
// 2. DETERMINAR SI ES MAYOR O MENOR DE EDAD

$edad= 20 ;
if ($edad >= 18) {
    echo "Es mayor de edad";
    } else {
        echo "Es menor de edad";
    }
?>

<?php
// 3. LISTA DE FRUTAS Y PRECIOS

$precio_frutas= array("Pera" => 0.9, "Manzana" => 1.2, "Melocoton" => 1.5);
echo $precio_frutas["Manzana"];

?>

<?php
// 4. Lectura de archivo de texto

$archivo = fopen("archivo.txt", "r");
fwrite($archivo, "Este es un texto.");
fclose($archivo);

?>
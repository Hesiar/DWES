<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required>
        </div><br>
        <div>
            <label for="comida">¿Cuál es tu comida favorita?: </label>
            <select name="comida" id="comida">
                <option value="pizza">Pizza</option>
                <option value="croquetas">Croquetas</option>
                <option value="hamburguesa">Hamburguesa</option>
                <option value="lasaña">Lasaña</option>
                <option value="sushi">Sushi</option>
                <option value="lentejas">Lentejas</option>
                <option value="carne_salsa">Carne en salsa</option>
                <option value="albondigas">Albóndigas</option>
            </select>
        </div><br>

        <button type="submit">Enviar</button><br>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $nombre = $_POST['nombre'];
            $comida = $_POST['comida'];

            #Esto lo he buscado en ChatGPT para poner el contenido de echo más correcto ortográficamente hablando

            $nombre = ucwords(strtolower($nombre));
            $comida = strtolower($comida);

            #strtolower lo que hace es poner todo en minuscula. ucwords lo que hace es poner la pirmera letra en mayuscula.
            #Por ello en ucwords(strtolower($nombre)), primero ponemos todo el texto en minuscula y luego solo la primera 
            #letra en mayuscula. Así si el usuario no escribe correctamente los datos que le pedimos lo corregimos nosotros.

            echo "<p>La comida favorita de $nombre es $comida.</p>";
        }
    ?>
</body>
</html>
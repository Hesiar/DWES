<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión básica a MySQL</title>
</head>
<body>
    <h1>Conexión básica a MySQL</h1>
    <hr>
    <?php
        // Primero ponemos los datos de conexión
        $host /* o $servidor */ = "localhost";
        $usuario = "root";
        $contrasena = "";
        $db = "mi_base";

        // Creamos la conexión
        $conexion = new mysqli($host, $usuario, $contrasena);

        // Verificamos la conexión
        $con_fallida = "Conexión fallida.";
        $con_exitosa = "Conexión exitosa.";
        if ($conexion->connect_error) {
            echo "<p>$con_fallida</p>"; // también podemos poner para info mas específica: die("Conexión fallida: ".$conexion->connect_error);
        } else {

            echo "<p>$con_exitosa</p>";
        }

        // Creamos la base de datos
        $sql = "CREATE DATABASE IF NOT EXISTS mi_base";
        // Comprobamos si la base de datos se ha creado correctamente o ya existe
        $base_creada_fallida ="Error al crear la base de datos: ";
        $base_creada_exitosa = "La base de datos $db ha sido creada con éxito o ya existía previamente.";
        if($conexion->query($sql) === TRUE){
            echo "<p>$base_creada_exitosa</p><br>";
        }else{
            echo "<p>$base_creada_fallida".$conexion->error."</p><br>";
        }

        // Me conecto a la base de datos
        $conexion = new mysqli($host, $usuario, $contrasena, $db);

        // Creamos la tabla que nos pide
        $sql = "CREATE TABLE IF NOT EXISTS usuarios(
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL
        )";

        // Verificamos si esta bien creada la tabla. Es como cuando hemos creado la base de datos y hemos comprobado si se ha creado correctamente
        $tabla_exito = "Tabla 'usuarios' creada o ya existe.";
        $tabla_fallida = "Error al crear la tabla: ";
        if ($conexion->query($sql) === TRUE) {
            echo "<p>$tabla_exito</p><br>";
        } else {
            echo "<p>$tabla_fallida".$conexion->error ."</p><br>";
        }

        // Cerrar la conexión
        $conexion->close();

    ?>
</body>
</html>
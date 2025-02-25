<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar datos de la Base de datos</title>
</head>
<body>
    <h2>Datos de la base de datos</h2>
    <hr>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mi_base";

        $conexion = new mysqli($host, $user, $pass, $db);

        $sql = "SELECT * FROM usuarios";
        $resultado = $conexion->query($sql);

         // Comprobamos si la consulta devolvió resultados
         if ($resultado->num_rows > 0) {
            // Mostrar los resultados en una tabla
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>";
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>" . $fila['id'] . "</td>
                        <td>" . $fila['nombre'] . "</td>
                        <td>" . $fila['email'] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }

        // Cerrar la conexión
        $conexion->close();
        
    ?>
</body>
</html>
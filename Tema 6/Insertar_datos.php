<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar datos</title>
</head>
<body>
    <h1>Insertar datos en la tabla de la base de datos</h1>
    <hr>
    <h3>Datos del nuevo usuario</h3>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Insertar en la tabla</button>
    </form>

    <?php
        // Inicializar las variables
        $nombre = "";
        $email = "";
        $error = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];

            // Comprobamos que los campos no estén vacíos
            if (empty($nombre) || empty($email)) {
                $error = "Por favor, rellene ambos campos.";
            } else {
                // Conexión a la base de datos
                $host = "localhost";
                $usuario = "root";
                $contrasena = "";
                $db = "mi_base";

                $conexion = new mysqli($host, $usuario, $contrasena, $db);

                // Comprobamos la conexión
                if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
                }

                // Verificamos si el email ya existe
                $sql_check = "SELECT COUNT(*) FROM usuarios WHERE email = '$email'";
                $result = $conexion->query($sql_check);
                $row = $result->fetch_row();

                if ($row[0] > 0) {
                    $error = "ERROR: El email ya está registrado.";
                } else {
                    // Insertamos los datos en la tabla
                    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
                    if ($conexion->query($sql) === TRUE) {
                        echo "<p>Datos insertados correctamente.</p>";
                        // Limpiar los campos después de insertar
                        $nombre = "";
                        $email = "";
                    } else {
                        echo "<p>Error al insertar los datos: " . $conexion->error . "</p>";
                    }
                }

                // Cerramos la conexión
                $conexion->close();
            }
        }

        // Mostrar error si los campos están vacíos o si el email ya está registrado
        if ($error) {
            echo "<p style='color:red;'>$error</p>";
        }
    ?>

</body>
</html>

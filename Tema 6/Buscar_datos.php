<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar datos</title>
</head>
<body>
    <h2>Buscar tus datos</h2>
    <hr>
    <form action="" method="post">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Buscar</button>
    </form>
    <?php
        $nombre = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];

            if(empty($nombre)){
                echo '<p>Debes ingresar tu nombre</p>';
            }else{
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'mi_base';

                $conn = new mysqli($host, $user, $pass, $db);

                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $sql= "SELECT * FROM usuarios WHERE nombre = '$nombre'";
                $resultado = $conn->query($sql);
                if ($resultado->num_rows > 0) {
                    echo "<h2>USUARIO ENCONTRADO</h2><br>
                    <table border='1'>
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
                $conn->close();
            }          
        }
        $nombre = '';
    ?>
</body>
</html>
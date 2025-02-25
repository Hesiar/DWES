<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar datos</title>
</head>
<body>
    <h2>Eliminar tus datos</h2>
    <hr>
    <form action="" method="post">
        <label for="id">Introduce tu ID:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Eliminar</button>
    </form>
    <?php
        $id = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            if(empty($id)){
                echo '<p>Debes ingresar un ID</p>';
            }else{
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'mi_base';

                $conn = new mysqli($host, $user, $pass, $db);

                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $sql= "DELETE FROM usuarios WHERE id = '$id'";
                if ($conn->query($sql) === TRUE) {
                    echo "Usuario eliminado con éxito";
                } else {
                    echo "Error al eliminar el usuario: " . $sql . "<br>" . $conn ->error;
                }
                $conn->close();
            }          
        }
        $id = '';
    ?>
</body>
</html>
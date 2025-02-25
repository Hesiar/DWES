<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos</title>
</head>
<body>
    <h2>Actualizar tus datos</h2>
    <hr>
    <form action="" method="post">
        <label for="id">Introduce tu ID:</label>
        <input type="number" id="id" name="id" required>
        <label for="email">Actualiza tu email: </label>
        <input type="text" id="email" name="email">
        <button type="submit">Actualizar</button>
    </form>
    <?php
        $id = '';
        $email_actualizado = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $email_actualizado = $_POST['email'];

            if(empty($id) || empty($email_actualizado)){
                echo '<p>Debes ingresar un ID y/o un email</p>';
            }else{
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'mi_base';

                $conn = new mysqli($host, $user, $pass, $db);

                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $sql= "UPDATE usuarios SET email = '$email_actualizado' WHERE id = '$id'";
                if ($conn->query($sql) === TRUE) {
                    echo "Email actualizado con éxito";
                } else {
                    echo "Error al actualizar el email: " . $sql . "<br>" . $conn ->error;
                }
                $conn->close();
            }          
        }
        $id = '';
        $email_actualizado = '';
    ?>
</body>
</html>
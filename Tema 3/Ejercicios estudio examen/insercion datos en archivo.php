<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Nombre: <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
        <br>
        Apellidos: <input type="text" name="apellidos" id="apellidos"  placeholder="Ingrese sus apellidos">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        /* ESTA ES LA FORMA EN LA QUE LO HEMOÇS APRENDIDO EN CLASE
            $nombre = "";
            $apellidos= "";
            if(isset($_POST["nombre"])&&isset($_POST["apellidos"])){
                $nombre = $_POST["nombre"];
                $apellidos = $_POST["apellidos"];
                
                $contenido = "Datos del usuario: $nombre $apellidos". PHP_EOL;
                $archivo = "usuarios.txt";
                if(file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX) !== false){
                    echo "Se ha agregado el usuario a la lista.";
                }else {
                    echo "Error al agregar el usuario a la lista.";
                }
            }
        */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"] ?? '';
            $apellidos = $_POST["apellidos"] ?? '';
            
            if (!empty($nombre) && !empty($apellidos)) {
                $contenido = "Datos del usuario: $nombre $apellidos" . PHP_EOL;
                $archivo = "usuarios.txt";

                if (file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX) !== false) {
                    echo "Se ha agregado el usuario a la lista.";
                } else {
                    echo "Error al agregar el usuario a la lista.";
                }

                // Redirigir para evitar el reenvío del formulario al recargar
                header("Location: " . $_SERVER["PHP_SELF"]);
                exit;
            }
        }
    ?>
</body>
</html>
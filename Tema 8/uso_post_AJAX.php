<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Formulario de Envío de Datos</h2>
    
    <form id="miFormulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <div id="respuesta"></div>

    <script>
        // Evento para capturar el envío del formulario
        $("#miFormulario").submit(function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe de manera tradicional

            // Obtener los datos del formulario
            var nombre = $("#nombre").val();
            var email = $("#email").val();

            // Enviar los datos al servidor usando $.post()
            $.post("", { nombre: nombre, email: email }, function(data) {
                // Mostrar la respuesta del servidor
                $("#respuesta").html(data);
            }).fail(function() {
                // En caso de error, mostrar un mensaje
                $("#respuesta").html("Hubo un error al enviar los datos.");
            });
        });
    </script>

    <?php
    // Verificar si el formulario ha sido enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);

        // Simular el procesamiento de datos (puedes guardarlos en una base de datos)
        echo "<script>
                $(document).ready(function(){
                    $('#respuesta').html('Datos recibidos correctamente: <br> Nombre: $nombre <br> Correo Electrónico: $email');
                });
              </script>";
    }
    ?>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Lista de Usuarios</h2>
    
    <ul id="listaUsuarios"></ul>

    <script>
        // Realizar una solicitud Ajax para obtener los datos en formato JSON
        $.ajax({
            url: 'usuarios.json',  // Simulamos que esta URL devuelve el JSON de usuarios
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Cuando recibimos la respuesta, iteramos sobre el array de usuarios
                data.forEach(function(usuario) {
                    // Crear un nuevo elemento <li> con la información del usuario
                    var listItem = $('<li></li>').text(usuario.nombre + ' (' + usuario.email + ')');
                    // Añadir el nuevo <li> a la lista <ul> con el id "listaUsuarios"
                    $('#listaUsuarios').append(listItem);
                });
            },
            error: function() {
                alert('Error al cargar los usuarios.');
            }
        });
    </script>

</body>
</html>

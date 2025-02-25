<!-- roles.php -->
<?php
include 'Usuario.php'; // Incluimos la clase Usuario.php
session_start(); // Recuperamos la sesión del usuario (En este caso, el supuesto administrador)
foreach ($usuarios as $usuario) //Asignamos a "usuario" el valor de un usuario del array "usuarios"
{
    // Buscamos al usuario actual...
    if ($usuario->usuario == $_SESSION['Usuario'])
    {
        //Si se ha encontrado al usuario pero no es administrador...
        if ($usuario->get_rol() !== 3)
        {
            // Redirigimos a una página de error
            header("www.ejemplo.com/error.php");
            // Evitamos que se siga ejecutando código de ésta página
            exit;
        }
    }
}

// Llegado aquí se sabe que el usuario es administrador
// Ahora podemos modificar roles
if (isset($_POST['aceptar']))
{
    foreach ($usuarios as $usuario) // Buscamos al usuario del formulario
    {
        // Encontramos al usuario que busca el admin
        if ($usuario->usuario == md5($_POST['usuario']))
        {
            // Si se ha insertado un rol correcto...
            if ($_POST['rol'] == 1 || $_POST['rol'] == 2 || $_POST['rol'] == 3)
            {
                // Le aplicamos el nuevo rol
                $usuario->set_rol($_POST['rol']);
            }
            else
            {
                echo '<strong style="color:red;"> Rol no válido </strong>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Página de administración de roles</title>
    </head>
    <body>
        <form method="POST" action="roles.php">
            <input type="text" name="usuario" maxlength="200"> Usuario: <br>
            <input type="text" name="rol" maxlength="20"> Nuevo Rol: <br>
            <input type="submit" name="aceptar" value="Aceptar">
        </form>
    </body>
</html>
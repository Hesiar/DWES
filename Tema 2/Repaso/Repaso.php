<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RepasoPHP</title>
</head>
<body>

    <!-- EJERCICIO 1.
    Crea una página HTML que muestre un mensaje de bienvenida personalizado 
    dependiendo de la hora del día usando solo condicionales y PHP. -->

    <?php
        $hora = date("H");

        if ($hora >= 6 && $hora < 12) {
            echo "¡Buenos días!";
        } elseif ($hora >= 12 && $hora < 18) {
            echo "¡Buenas tardes!";
        } elseif ($hora >= 18 && $hora < 22) {
            echo "¡Buenas noches!";
        } else {
            echo "¡Buenas noches por la madrugada!";
        }
    ?>

    <!-- EJERCICIO 2.
    Implementa un sistema de navegación donde se carguen diferentes secciones de 
    la página (home, contacto, servicios) utilizando include en PHP para reutilizar 
    el encabezado y el pie de página.  -->

    <?php include 'header.php'; ?> 

    <?php include 'footer.php'; ?>

    <!-- EJERCICIO 3.
    Crea un formulario de inicio de sesión que valide el usuario y la contraseña 
    contra una base de datos y muestre un mensaje de error si las credenciales no son válidas. -->
     
    <form action="" method="POST">
        <input type="text" id="usuario" name="usuario" required>
        <input type="password" id="contraseña" name="contraseña" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if(isset($_POST["usuario"]) && isset($_POST["contraseña"])){
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];
            echo "Tu usuario es: ",$usuario," y tu contraseña es: ",$contraseña;
        }elseif(strlen($_POST["contraseña"] < 8)){
            echo "La contraseña debe ser de una longitud superior a 8 caracteres"
        }
    ?>

    <!-- EJERCICIO 4.
    Muestra una lista de libros disponibles en una biblioteca utilizando un array asociativo en PHP, 
    donde cada libro tiene título, autor y año de publicación.  -->

    <?php
        $libros = [
            ["titulo" => "Cien años de soledad", "autor" => "Gabriel García Márquez", "anio" => 1967],
            ["titulo" => "Don Quijote de la Mancha", "autor" => "Miguel de Cervantes", "anio" => 1605],
            ["titulo" => "1984", "autor" => "George Orwell", "anio" => 1949]
        ];

        echo "<ul>";
        foreach ($libros as $libro) {
            echo "<li>{$libro['titulo']} - {$libro['autor']} ({$libro['anio']})</li>";
        }
        echo "</ul>";
    ?>

    <!-- EJERCICIO 5.
    Implementa un sistema de comentarios sencillo que comentes los codigos generados en los ejercicios 
    anteriores (con detalle de que hace cada funcion).   -->

    <ul>
        <li>Ejercicio 1: Se usa date() para mostrar un saludo dependiendo de  la hora</li>
        <li>Ejercicio 2: Utilizamos include para reutilizar partes comunes del sitio como el encabezado y el pie de pagina</li>

</body>
</html>
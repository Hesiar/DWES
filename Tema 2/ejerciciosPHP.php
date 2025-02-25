<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EjerciciosPHP</title>
    </head>
    <body>

       <!-- EJERCICIOS DE PHP -->
       
       <!-- Ejerecicio 1 
        Crea una página HTML que utilice PHP embebido para mostrar la
        fecha y hora actual del servidor.  -->

        <p>La fecha y hora actual es: <?php echo date("Y-m-d H:i:s"); ?></p>

        <!-- Ejercicio 2
        Implementa un sistema de plantilla básico con PHP donde el
        contenido principal de la página cambia dinámicamente, usando include para el
        encabezado y pie de página.

        Ejercicio realizado a parte de este documento. Carpeta "Ejercicio 2". -->

        <!-- Ejercicio 3 
        Crea un formulario de registro que procese los datos y los
        muestre en la misma página.  -->

        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="contrasena" placeholder="Contraseña">
            <input type="submit" value="Registrar">
        </form>
        <?php
            if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
                echo "<p>Usuario registrado: " . htmlspecialchars($_POST['usuario']) ."</p>";
            }
        ?>

        <!-- Ejercicio 4
        Muestra una lista de productos utilizando un array en PHP embebido dentro de una tabla HTML.  -->

        <?php
            $productos = ["Producto 1", "Producto 2", "Producto 3"];
        ?>
        <table>
            <tr>
                <th>Nombre del producto</th>
            </tr>    
            <?php foreach ($productos as $producto) {?>
                <tr>
                    <td><?php echo $producto; ?></td>
                </tr>
            <?php } ?>
        </table>

        <!-- Ejercicio 5
        Implementa un contador de visitas usando PHP embebido y
        almacenamiento en un archivo de texto. -->

        <?php
            $file = 'contador.txt';
            if (file_exists($file)) {
            $visitas = file_get_contents($file);
            $visitas++;
            } else {
            $visitas = 1;
            }
            file_put_contents($file, $visitas);
            echo "<p>Visitas: $visitas</p>";
        ?>

        <!-- Ejercicio 6
        Crea un formulario que permita al usuario elegir su idioma y usa
        PHP para cambiar el contenido de la página basado en esa selección.  -->

        <form method="POST">
            <select name="idioma">
                <option value="es">Español</option>
                <option value="en">English</option>
            </select>
            <input type="submit" value="Cambiar Idioma">
        </form>
        <?php
            $idioma = $_POST['idioma'] ?? 'es';
            if ($idioma == 'es') {
            echo "<p>Bienvenido!</p>";
            } else {
            echo "<p>Welcome!</p>";
            }
        ?>

        <!-- Ejercicio 7
        Descripción: Implementa un script para cargar y mostrar imágenes de una
        carpeta usando PHP. -->

        <?php
            $imagenes = glob('imagenes/*.jpg');
        ?>
        <div>
            <?php foreach ($imagenes as $imagen) { ?>
            <img src="<?php echo $imagen; ?>" alt="Imagen">
            <?php } ?>
        </div>

        <!-- Ejercicio 8
        Genera un número aleatorio y muéstralo en una página HTML usando
        PHP embebido.  -->

        <p>Número aleatorio: <?php echo rand(1, 100); ?></p>
    
        <!-- Ejercicio 9
        Crea un formulario de contacto y usa PHP para procesar y mostrar
        un mensaje de confirmación.  -->

        <form method="POST">
            <input type="text" name="nombre" placeholder="Tu Nombre">
            <input type="email" name="email" placeholder="Tu Correo">
            <textarea name="mensaje" placeholder="Tu Mensaje"></textarea>
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_POST['nombre'] && $_POST['email'] && $_POST['mensaje']) {
            echo "<p>Gracias por tu mensaje, " . htmlspecialchars($_POST['nombre']) . ".</p>";
            }
        ?>

    </body>
</html>
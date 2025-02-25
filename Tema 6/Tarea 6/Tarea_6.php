<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #nulo{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Consultas de libros y autores</h1>
    <hr>
    <h2>Consultas</h2>
    <form action="" method="post">
        <ul>
            <li>
                <label for="ID_busqueda">Buscar un autor por su id: </label>
                <input type="number" id="ID_busqueda" name="ID_busqueda">
            </li>
            <li>
                <label for="ID_libros">Buscar un libro por el id de su autor: </label>
                <input type="number" id="ID_libros" name="ID_libros">
            </li>
            <li>
                <label for="ID_unico_libro">Buscar un libros por su id: </label>
                <input type="number" id="ID_unico_libro" name="ID_unico_libro">
            </li>
            <li>
                <label for="Borrar_autor">Borrar un autor por su id: </label>
                <input type="number" id="Borrar_autor" name="Borrar_autor">
            </li>
            <li>
                <label for="Borrar_libro">Borrar un libro por su id: </label>
                <input type="number" id="Borrar_libro" name="Borrar_libro">
            </li>
        </ul>
        <input type="submit" value="Buscar">
    </form>
    <br><br>
    <?php
        $hostname = "localhost";
        $usuario = "root";
        $contrasena = "";

        $conn = new mysqli($hostname, $usuario, $contrasena);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "CREATE DATABASE IF NOT EXISTS Libros";
        
        $conn->query($sql);

        $conn = new mysqli($hostname, $usuario, $contrasena, "Libros");

        /*
        $sql = "CREATE TABLE IF NOT EXISTS Autor(
            Id INT AUTO_INCREMENT PRIMARY KEY,
            Nombre VARCHAR(15) NOT NULL,
            Apellidos VARCHAR(25) NOT NULL,
            Nacionalidad VARCHAR(20) NOT NULL
        )";

        if(($conn->query($sql)) === TRUE) {
            echo "<p>La tabla Autor se ha creado correctamente</p>";
        }else{
            echo "<p>Error al crear la tabla Autor: ".$conn->error."</p>";
        }

        $sql = "CREATE TABLE IF NOT EXISTS Libro(
            Id INT AUTO_INCREMENT PRIMARY KEY,
            Titulo VARCHAR(50) NOT NULL,
            Fecha_publicacion DATE NOT NULL,
            Id_Autor INT,
            FOREIGN KEY (Id_Autor) REFERENCES Autor(Id) ON DELETE CASCADE ON UPDATE CASCADE
        )";

        if(($conn->query($sql)) === TRUE) {
            echo "<p>La tabla Libro se ha creado correctamente</p>";
        }else{
            echo "<p>Error al crear la tabla Libro: ".$conn->error."</p>";
        }

        // Ahora se rellenan las tablas

        $sql = "INSERT INTO Autor (Nombre, Apellidos, Nacionalidad) VALUES ('J.R.R.', 'Tolkien', 'Inglesa'), ('Isaac', 'Asimov', 'Rusa');";

        if(($conn->query($sql)) === TRUE) {
            echo "<p>Se han insertado los datos en la tabla Autor correctamente.</p>";
        }else{
            echo "<p>Error al insertar los datos en la tabla Autor: ".$conn->error."</p>";
        }

        $result = $conn->query("SELECT Id FROM Autor WHERE Nombre = 'J.R.R.' AND Apellidos = 'Tolkien'");
        $id_Tolkien = $result->fetch_assoc()['Id'];

        $result = $conn->query("SELECT Id FROM Autor WHERE Nombre = 'Isaac' AND Apellidos = 'Asimov'");
        $id_Asimov = $result->fetch_assoc()['Id'];
        
        $sql = "INSERT INTO Libro (Titulo, Fecha_publicacion, Id_Autor) VALUES 
                ('El Hobbit', '1937-09-21', $id_Tolkien),
                ('La comunidad del anillo', '1954-07-20', $id_Tolkien),
                ('Las dos torres', '1954-11-11', $id_Tolkien),
                ('El retorno del rey', '1955-10-20', $id_Tolkien),
                ('Un guijarro en el cielo', '1950-01-15', $id_Asimov),
                ('Fundación', '1951-06-01', $id_Asimov),
                ('Yo, Robot', '1950-12-02', $id_Asimov)
            "
        ;

        if(($conn->query($sql)) === TRUE) {
            echo "<p>Se han insertado los datos en la tabla Libro correctamente.</p>";
        }else{
            echo "<p>Error al insertar los datos en la tabla Libro: ".$conn->error."</p>";
        }
        /**/
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            /**
            * Busca un autor por su ID y muestra su información.
            *
            * @param int $id_solicitado El ID del autor a buscar.
            * @return void
            */

            if (!empty($_POST['ID_busqueda'])) {
                $id_solicitado = $_POST['ID_busqueda'];
                $result = $conn->query("SELECT * FROM Autor WHERE Id = $id_solicitado");
                if ($result->num_rows > 0) {
                    $autor = $result->fetch_assoc();
                    echo "<p>El autor con ID $id_solicitado es: $autor[Nombre] $autor[Apellidos], de nacionalidad $autor[Nacionalidad]</p>";
                } else {
                    echo "<h3 id='nulo'><strong>NULL</strong></h3>";
                }
            }

            /**
            * Busca todos los libros de un autor por su ID.
            *
            * @param int $id_autor El ID del autor cuyos libros se buscan.
            * @return void
            */

            if (!empty($_POST['ID_libros'])) {
                $id_autor = $_POST['ID_libros'];
                $result = $conn->query("SELECT * FROM Libro WHERE Id_Autor = $id_autor");
                if ($result->num_rows > 0) {
                    echo "<p>Los libros del autor con ID $id_autor son:</p><ul>";
                    while ($libro = $result->fetch_assoc()) {
                        echo "<li>$libro[Titulo] (Fecha de publicación: $libro[Fecha_publicacion])</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<h3 id='nulo'><strong>NULL</strong></h3>";
                }
            }

            if (!empty($_POST['ID_unico_libro'])) {
                $id_unico_libro = $_POST['ID_unico_libro'];
                $result = $conn->query("SELECT * FROM Libro WHERE Id = $id_unico_libro");
                if ($result->num_rows > 0) {
                    $libro = $result->fetch_assoc();
                    echo "<p>El libro solicitado es:</p>";
                    echo "<p>Título: $libro[Titulo] | Fecha de publicación: $libro[Fecha_publicacion]</p>";
                } else {
                    echo "<h3 id='nulo'><strong>NULL</strong></h3>";
                }
            }

            if (!empty($_POST['Borrar_autor'])) {
                $Borrar_autor = $_POST['Borrar_autor'];
                $conn->query("DELETE FROM Autor WHERE Id = $Borrar_autor");
                if ($conn->affected_rows > 0) {
                    echo "<p>El autor ha sido borrado.</p>";
                } else {
                    echo "<h3 id='nulo'><strong>NULL</strong></h3>";
                }
            }
            
            if (!empty($_POST['Borrar_libro'])) {
                $Borrar_libro = $_POST['Borrar_libro'];
                $conn->query("DELETE FROM Libro WHERE Id = $Borrar_libro");
                if ($conn->affected_rows > 0) {
                    echo "<p>El libro ha sido borrado.</p>";
                } else {
                    echo "<h3 id='nulo'><strong>NULL</strong></h3>";
                }
            }
        } else {
            echo "<h3><strong>Introduzca una consulta</strong></h3>";
        }

        $conn->close();

    ?>
</body>
</html>
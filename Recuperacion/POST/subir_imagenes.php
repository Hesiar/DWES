<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imágenes</title>
</head>
<body>
    <h1>Guarda tus imágenes</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="imagen">Selecciona la imágen que deseas subir</label>
        <input type="file" name="imagen" id="imagen" required><br>
        <button type="submit">Subir Imagen</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verifica si se ha cargado una imagen
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
                
                $imagenTmp = $_FILES['imagen']['tmp_name'];
                $imagenNombre = $_FILES['imagen']['name'];
                $imagenTipo = $_FILES['imagen']['type'];
                $imagenTamaño = $_FILES['imagen']['size'];
                
                // Define el directorio donde se guardarán las imágenes
                $directorioDestino = 'imagenes_subidas/';
                
                // Verifica el tipo de archivo (solo imágenes permitidas)
                $tiposPermitidos = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
                
                if (in_array($imagenTipo, $tiposPermitidos)) {
                    
                    // Verifica el tamaño del archivo (por ejemplo, 2MB máximo)
                    if ($imagenTamaño <= 2 * 1024 * 1024) {
                        
                        // Mueve el archivo cargado a la carpeta de destino
                        if (move_uploaded_file($imagenTmp, $directorioDestino . $imagenNombre)) {
                            echo "<p>La imagen se ha subido correctamente.</p>";
                        } else {
                            echo "<p>Error al mover la imagen a la carpeta de destino.</p>";
                        }
                        
                    } else {
                        echo "<p>El archivo es demasiado grande. El tamaño máximo permitido es 2MB.</p>";
                    }
                    
                } else {
                    echo "<p>Solo se permiten archivos de imagen (JPG, JPEG, PNG, GIF).</p>";
                }
                
            } else {
                echo "<p>No se ha cargado ninguna imagen o ha ocurrido un error.</p>";
            }
        }
    ?>
</body>
</html>
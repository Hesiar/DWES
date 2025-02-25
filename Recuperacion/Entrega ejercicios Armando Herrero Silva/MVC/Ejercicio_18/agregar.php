<?php
    require_once 'controlador/ControladorComentario.php';
    $controlador = new ControladorComentario();
    $controlador->agregarComentario($_POST['nombre_usuario'], $_POST['comentario']);
?>  
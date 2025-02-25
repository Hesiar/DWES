<?php
    require_once 'ControladorProducto.php';
    $controlador = new ControladorProducto();
    $controlador->editarProducto($_POST['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
?>  
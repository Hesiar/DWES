<?php
    require_once 'ControladorProducto.php';
    $controlador = new ControladorProducto();
    $controlador->eliminarProducto($_GET['id']);
?>
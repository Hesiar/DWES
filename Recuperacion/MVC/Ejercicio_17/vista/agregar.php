<?php
    require_once 'ControladorProducto.php';
    $controlador = new ControladorProducto();
    $controlador->agregarProducto($_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
?>  
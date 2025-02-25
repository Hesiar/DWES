<?php
    require_once 'controlador/ControladorUsuario.php';
    $controlador = new ControladorUsuario();
    $controlador->registrarUsuario($_POST['username'], $_POST['password']);
?>  
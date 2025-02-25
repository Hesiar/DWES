<?php
    require_once 'controlador/ControladorUsuario.php';
    $controlador = new ControladorUsuario();
    $controlador->iniciarSesion($_POST['username'], $_POST['password']);
?>  
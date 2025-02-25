<?php
    require_once 'ModeloUsuario.php';

    class ControladorUsuario {
        private $modelo;
    
        public function __construct() {
            $this->modelo = new ModeloUsuario();
        }
    
        public function mostrarUsuarios() {
            $usuarios = $this->modelo->obtenerUsuarios();
            include 'VistaUsuarios.php';
        }
    }
?>
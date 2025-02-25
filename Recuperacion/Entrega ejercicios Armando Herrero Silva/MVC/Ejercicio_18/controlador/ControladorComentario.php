<?php
    require_once 'ModeloComentario.php';

    class ControladorComentario {
        private $modelo;
    
        public function __construct() {
            $this->modelo = new ModeloComentario();
        }
    
        public function mostrarComentarios() {
            $comentarios = $this->modelo->obtenerComentarios();
            include 'vista/VistaComentarios.php';
        }
    
        public function agregarComentario($nombre_usuario, $comentario) {
            $this->modelo->agregarComentario($nombre_usuario, $comentario);
            header("Location: index.php");
        }
    }
?>  
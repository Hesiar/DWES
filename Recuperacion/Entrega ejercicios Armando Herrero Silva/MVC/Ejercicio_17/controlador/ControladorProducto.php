<?php
    require_once 'ModeloProducto.php';

    class ControladorProducto {
        private $modelo;
    
        public function __construct() {
            $this->modelo = new ModeloProducto();
        }
    
        public function mostrarProductos() {
            $productos = $this->modelo->obtenerProductos();
            include 'VistaProductos.php';
        }
    
        public function agregarProducto($nombre, $descripcion, $precio) {
            $this->modelo->agregarProducto($nombre, $descripcion, $precio);
            header("Location: index.php");
        }
    
        public function editarProducto($id, $nombre, $descripcion, $precio) {
            $this->modelo->actualizarProducto($id, $nombre, $descripcion, $precio);
            header("Location: index.php");
        }
    
        public function eliminarProducto($id) {
            $this->modelo->eliminarProducto($id);
            header("Location: index.php");
        }
    }
?>  
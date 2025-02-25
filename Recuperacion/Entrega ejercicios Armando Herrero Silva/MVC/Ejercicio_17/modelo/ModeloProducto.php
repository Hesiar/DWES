<?php
    class ModeloProducto {
        private $db;
    
        public function __construct() {
            $this->db = new mysqli('localhost', 'root', '', 'productoDB');
        }
    
        public function obtenerProductos() {
            $result = $this->db->query("SELECT * FROM productos");
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    
        public function agregarProducto($nombre, $descripcion, $precio) {
            $stmt = $this->db->prepare("INSERT INTO productos (nombre, descripcion, precio) VALUES (?, ?, ?)");
            $stmt->bind_param("ssd", $nombre, $descripcion, $precio);
            $stmt->execute();
        }
    
        public function obtenerProducto($id) {
            $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }
    
        public function actualizarProducto($id, $nombre, $descripcion, $precio) {
            $stmt = $this->db->prepare("UPDATE productos SET nombre = ?, descripcion = ?, precio = ? WHERE id = ?");
            $stmt->bind_param("ssdi", $nombre, $descripcion, $precio, $id);
            $stmt->execute();
        }
    
        public function eliminarProducto($id) {
            $stmt = $this->db->prepare("DELETE FROM productos WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }  
    }  
?>
<?php
    class ModeloComentario {
        private $db;
    
        public function __construct() {
            $this->db = new mysqli('localhost', 'root', '', 'comentariosDB');
        }
    
        public function obtenerComentarios() {
            $result = $this->db->query("SELECT * FROM comentarios ORDER BY fecha DESC");
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    
        public function agregarComentario($nombre_usuario, $comentario) {
            $stmt = $this->db->prepare("INSERT INTO comentarios (nombre_usuario, comentario) VALUES (?, ?)");
            $stmt->bind_param("ss", $nombre_usuario, $comentario);
            $stmt->execute();
        }
    }
?>  
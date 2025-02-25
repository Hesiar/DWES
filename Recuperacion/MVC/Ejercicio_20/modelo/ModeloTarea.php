<?php
    class ModeloTarea {
        private $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=tareas_db', 'root', '');
        }

        public function agregarTarea($descripcion) {
            $sql = "INSERT INTO tareas (descripcion, completada, fecha_creacion) VALUES (?, 0, NOW())";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$descripcion]);
        }

        public function marcarCompletada($id) {
            $sql = "UPDATE tareas SET completada = 1 WHERE id = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id]);
        }

        public function eliminarTarea($id) {
            $sql = "DELETE FROM tareas WHERE id = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id]);
        }

        public function listarTareas() {
            $sql = "SELECT * FROM tareas";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>

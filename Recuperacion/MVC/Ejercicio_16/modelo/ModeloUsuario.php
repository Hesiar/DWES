<?php
    class ModeloUsuario {
        private $db;

        public function __construct() {
            $this->db = new mysqli('localhost', 'root', '', 'usuarioDB');
        }

        public function obtenerUsuarios() {
            $result = $this->db->query("SELECT * FROM usuarios");
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
?>

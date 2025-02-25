<?php
    class ModeloUsuario {
        private $db;
    
        public function __construct() {
            $this->db = new mysqli('localhost', 'root', '', 'authDB');
        }
    
        public function registrarUsuario($username, $password) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->db->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashedPassword);
            return $stmt->execute();
        }
    
        public function verificarCredenciales($username, $password) {
            $stmt = $this->db->prepare("SELECT password FROM usuarios WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($hashedPassword);
            if ($stmt->fetch()) {
                return password_verify($password, $hashedPassword);
            }
            return false;
        }
    }
?>    
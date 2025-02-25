<?php
    require_once 'modelo/ModeloUsuario.php';

    class ControladorUsuario {
        private $modelo;
    
        public function __construct() {
            $this->modelo = new ModeloUsuario();
        }
    
        public function registrarUsuario($username, $password) {
            if ($this->modelo->registrarUsuario($username, $password)) {
                header("Location: login.php");
            } else {
                echo "Error al registrar el usuario.";
            }
        }
    
        public function iniciarSesion($username, $password) {
            if ($this->modelo->verificarCredenciales($username, $password)) {
                session_start();
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
            } else {
                echo "Credenciales incorrectas.";
            }
        }
    }
?>  
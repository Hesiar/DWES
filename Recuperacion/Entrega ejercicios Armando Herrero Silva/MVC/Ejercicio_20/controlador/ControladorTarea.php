<?php
    require_once 'modelo/ModeloTarea.php';

    class ControladorTarea {
        private $modelo;

        public function __construct() {
            $this->modelo = new ModeloTarea();
        }

        public function agregarTarea($descripcion) {
            $this->modelo->agregarTarea($descripcion);
            $this->listarTareas();
        }

        public function marcarCompletada($id) {
            $this->modelo->marcarCompletada($id);
            $this->listarTareas();
        }

        public function eliminarTarea($id) {
            $this->modelo->eliminarTarea($id);
            $this->listarTareas();
        }

        public function listarTareas() {
            $tareas = $this->modelo->listarTareas();
            require 'vista/listar.php';
        }
    }
?>

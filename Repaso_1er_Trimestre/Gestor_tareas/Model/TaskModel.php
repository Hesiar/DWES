<?php

    class TaskModel {

        private $tasks = [];

        public function __construct() {                                                               // Contructor
            $this->tasks = [
                ['id' => 1, 'name' => 'Comprar pan', 'Completado' => false],
                ['id' => 2, 'name' => 'Comprar leche', 'Completado ' => true],
                ['id' => 3, 'name' => 'Comprar azúcar', 'Completado' => false],
            ];
        }

        public function getTasks() {                                                                   // Getter
            return $this->tasks;
        }

        public function addTask($task) {                                                               // Setter
            $id= count($this->tasks) + 1;
            $this->tasks[] = ['id' => $id, 'name' => $task, 'Completado' => false];
        }

        // Funcion para completar una tarea

        public function CompletarTarea($id){
            foreach ($this->tasks as $task) {
                if ($task['id'] == $id) {
                    $task['Completado'] = true;
                    return;
                }
            }
        }

    }

?>
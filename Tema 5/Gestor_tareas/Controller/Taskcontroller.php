<?php

    require_once 'Model/TaskModel.php';

    class TaskController {

        private $model;

        // Se hace constructor
        public function __construct() {
            $this->model = new TaskModel();
        }

        //Getter
        public function listTasks() {
            return $this->model->getTasks();
            require 'View/tasks.php';
        }

        //Setter

        public function addTask($title) {
            $this->model->addTask($title);
            $this->listTasks();
        }
        
        //Funciones

        public function CompletarTarea($id) {
            $this->model->CompletarTarea($id);
            $this->listTasks();
        }
        
    }
?>
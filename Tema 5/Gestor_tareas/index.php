<?php
require_once 'Controllers/controladores.php';

$controller = new TaskController();

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'add':
        $title = $_POST['title'] ?? '';
        if (!empty($title)) {
            $controller->addTask($title);
        }
        break;

    case 'complete':
        $id = $_GET['id'] ?? 0;
        $controller->CompletarTarea($id);
        break;

    default:
        $controller->listTasks();
        break;
}
?>

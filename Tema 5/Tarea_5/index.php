    
<?php    

    define('CON_CONTROLADOR', true);

    require_once 'controllers/controladores.php';

    $action = $_GET['action'] ?? 'view';

    switch ($action) {
        case 'sugerencias':
            $controller->listSugerencias();
            break;
        case 'nueva_sugerencia':
            require 'view/form_sugerencias.php';
            break;
        case 'guardar_sugerencia':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller->addSugerencia($_POST['sugerencia']);
            }
            break;
        case 'registro':
            $controller->showFormRegistro();
            break;
        case 'registrar_usuario':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller->registrarUsuario($_POST['nombre'], $_POST['email']);
            }
            break;
        case 'view':
        default:
            $controller->listArticulos();
            break;
    }
?>

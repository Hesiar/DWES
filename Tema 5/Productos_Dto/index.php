<?php
    require_once 'controllers/ProductController.php';

    $controller = new ProductController();
    
    $action = $_GET['action'] ?? 'list';

    switch ($action) {
        case 'add':
            $name = $_POST['name'] ?? '';
            $price = $_POST['price'] ?? '';
            if (!empty($name) && $price > 0) {
                $controller->addProduct($name, $price);
            }
            break;

        default:
            $controller->listProducts();
            break;
        }
?>
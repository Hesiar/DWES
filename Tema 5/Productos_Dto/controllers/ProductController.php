
<?php
    require_once 'models/ProductModel.php';

    class ProductController {
        private $model;

        public function __construct() {
            $this->model = new ProductModel();
        }

        public function listProducts() {
            $products = $this->model->getProducts();
            require 'views/productos.php';
        }

        public function addProduct($name, $price) {
            $this->model->addProduct($name, $price);
            $this->listProducts();
        }

    }
?>
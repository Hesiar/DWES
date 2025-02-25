
<?php
    class ProductModel {
        private $products = [];

        public function __construct() {
            $this -> products = [
                ['id' => 1, 'name' => 'Product 1', 'price' => 10.99],
                ['id' => 2, 'name' => 'Product 2', 'price' => 9.99],
                ['id' => 3, 'name' => 'Product 3', 'price' => 12.99],
                ['id' => 4, 'name' => 'Product 4', 'price' => 11.99]
            ];
        }

        public function getProducts() {
            return $this->products;
        }

        public function addProduct($name, $price){
            $id = count($this->products) + 1;
            $this->products[] = ['id' => $id, 'name' => $name , 'price' => $price];
        }
        
    }
?>
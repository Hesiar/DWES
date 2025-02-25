
<?php

    if (!defined('CON_CONTROLADOR')) {
        die('Error: No se puede acceder directamente a este archivo.');
    }

    class Articulos_Modelo{

    private $articulos = [];

        //Constructor

        public function __construct() {
            $this->articulos = [
                ['id' => 1, 'nombre' => 'Detector de humo', 'precio' => 10.99, 'stock' => 10, 'categoria' => 'Electronica'],
                ['id' => 2, 'nombre' => 'Lampara de escritorio', 'precio' => 5.99, 'stock' => 0, 'categoria' => 'Electronica'],
                ['id' => 3, 'nombre' => 'Caja de herramientas', 'precio' => 29.99, 'stock' => 15, 'categoria' => 'Herramientas'],
            ];
        }

        //Getter

        public function getArticulos() {
            return $this->articulos;
        }

        //Setter(Add)

        /**
        * Añade un nuevo artículo a la lista.
        *
        * @param string $articulo Nombre del artículo.
        * @param float $precio Precio del artículo.
        * @param int $stock Cantidad disponible en stock.
        * @param string $categoria Categoría del artículo.
        * @return void
        */

        public function addArticulo($articulo, $precio, $stock, $categoria) {
            $id = count($this->articulos) + 1;
            $this->articulos[] = ['id' => $id, 'nombre' => $articulo, 'precio' => $precio, 'stock' => $stock, 'categoria' => $categoria];
        }

        //Funciones

        /**
        * Busca un artículo por su ID.
        *
        * @param int $id ID del artículo a buscar.
        * @return array|null Devuelve el artículo si se encuentra, o null si no existe.
        */

        public function ArticuloPorId($id){
            foreach ($this->articulos as $articulo) {
                if ($articulo['id'] == $id) {
                    return $articulo;
                }
            }
            return null;
        }
    }
?>

<?php

    require_once 'models/modelo.php';

    class articuloController{
        
        private $modelo;
        private $sugerencias = [];
        private $usuarios = [];

        //Contructor

        public function __construct(){
            $this->modelo = new Articulos_Modelo();
        }

        //Getter

        /**
        * Obtiene la lista de todos los artículos.
        *
        * @return array Lista de artículos.
        */

        public function listArticulos() {
            return $this->modelo->getArticulos();
            require 'view/articulos.php';
        }

        //Setter

        /**
        * Añade un nuevo artículo al modelo.
        * @param string $articulo Nombre del artículo.
        * @param float $precio Precio del artículo.
        * @param int $stock Cantidad disponible en stock.
        * @param string $categoria Categoría del artículo.
        * @return void
        */

        public function addArticulo($articulo, $precio, $stock, $categoria) {
            $this->modelo->addArticulo($articulo, $precio, $stock, $categoria);
            $this->listArticulos(); 
        }

        //Funciones

        /**
        * Busca un artículo por su ID.
        * @param int $id ID del artículo a buscar.
        * @return array|null Devuelve el artículo si se encuentra, o null si no existe.
        */

        public function ArticuloPorId($id){
            return $this->modelo->ArticuloPorId($id);
            $this->listArticulos(); 
        }

        // Métodos de Sugerencias
        public function listSugerencias() {
            $sugerencias = $this->sugerencias;
            require 'view/sugerencias.php';
        }

        public function addSugerencia($texto) {
            $this->sugerencias[] = $texto;
            $this->listSugerencias();
        }

        // Métodos de Registro
        public function showFormRegistro() {
            require 'view/registro.php';
        }

        public function registrarUsuario($nombre, $email) {
            $this->usuarios[] = ['nombre' => $nombre, 'email' => $email];
            echo "<p>Usuario registrado: $nombre ($email)</p>";
            echo '<a href="index.php?action=registro">Volver al registro</a>';
        }
    }    
?>
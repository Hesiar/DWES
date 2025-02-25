<!-- usuario.php -->
<?php
class Usuario
{
    public $usuario;
    public $password;
    // Posibles valores de rol:
    // 1 = Usuario;
    // 2 = Redactor;
    // 3 = Administrador;
    private $rol;
    public function __construct()
    {
        $this->rol = 1; //Ponemos usuario por defecto;
    }
    public function get_rol()
    {
        return $this->rol;
    }
    public function set_rol($nuevo_rol)
    {
        $this->rol = $nuevo_rol;
    }
}
?>

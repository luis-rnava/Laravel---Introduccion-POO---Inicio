<?php

include 'includes/header.php';

// Metodos estaticos
class Empleado
{
    // public, private, protected
    // Public: se puede acceder desde cualquier parte del código
    // Private: solo se puede acceder desde la clase donde se define
    // Protected: se puede acceder desde la clase donde se define y desde las clases que heredan de ella
    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        self::$nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }
    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public static function obtenerEmpleado()
    {
        echo "desde el método estático";
    }
    public static function getNombre()
    {
        return self::$nombre;
    }
}


Empleado::obtenerEmpleado();

$luis = new Empleado('Luiss', 'Navarro', 'Sistemas', 'luis.navarro@example.com', 'EMP003');

echo $luis::getNombre();
echo '<pre>';
var_dump($luis);
echo '</pre> <br>';

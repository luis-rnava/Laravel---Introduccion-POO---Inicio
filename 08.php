<?php
include 'includes/header.php';

// Modificadores de acceso
class Empleado{
    // public, private, protected
    // Public: se puede acceder desde cualquier parte del código
    // Private: solo se puede acceder desde la clase donde se define
    // Protected: se puede acceder desde la clase donde se define y desde las clases que heredan de ella
    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
   }

    public function obtenerNombre(){
        return $this->nombre;
    }
    public function cambiarNombre($nombre){
        $this->nombre = $nombre;
    }   
}

$luis = new Empleado('Luis', 'Navarro', 'Sistemas', 'luis.navarro@example.com', 'EMP003');
$luis->cambiarNombre('Luis Miguel');
echo $luis-> obtenerNombre();
echo '<pre>';
var_dump($luis);
echo '</pre> <br>';
<?php
include 'includes/header.php';

// Constructores en PHP
class Empleado{
    public $nombre;
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
}

$luis = new Empleado('Luis', 'Navarro', 'Sistemas', 'luis.navarro@example.com', 'EMP003');
$jesica = new Empleado('Jesica', 'Navarro', 'Recursos Humanos', 'jesica.navarro@example.com', 'EMP004');

echo '<pre>';
var_dump($luis);
echo '</pre> <br>';
echo '<pre>';
var_dump($jesica);
echo '</pre>';
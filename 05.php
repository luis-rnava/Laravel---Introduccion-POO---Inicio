<?php
include 'includes/header.php';


// Tipado en PHP
class Empleado{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo){
        
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}

$luis = new Empleado('Luis', 'Navarro', 'Sistemas', 'luis.navarro@example.com', 006);
$jesica = new Empleado('Jesica', 'Navarro', 'Recursos Humanos', 'jesica.navarro@example.com', 007);

echo '<pre>';
var_dump($luis);
echo '</pre> <br>';
echo '<pre>';
var_dump($jesica);
echo '</pre>';
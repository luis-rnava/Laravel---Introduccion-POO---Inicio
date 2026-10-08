<?php
include 'includes/header.php';


// Constructor properties Promotion
class Empleado{
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){      
        
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
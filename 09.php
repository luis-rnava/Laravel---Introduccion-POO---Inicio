<?php
include 'includes/header.php';

// Getters y Setters
class Empleado{
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
   }
    /*
        Get: Para obtener el valor de una propiedad privada o protegida
        Set: Para modificar el valor de una propiedad privada o protegida
    */ 
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }  
    public function getCodigo(){
        return $this->codigo;
    } 
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
}

$luis = new Empleado('Luis', 'Navarro', 'Sistemas', 'luis.navarro@example.com', 006);
$luis->setNombre('Luis Miguel');
$luis->setCodigo(007);
echo $luis-> getNombre();
echo $luis-> getCodigo();
echo '<pre>';


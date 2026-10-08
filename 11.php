<?php

include 'includes/header.php';

// Clases abstractas
abstract class Persona
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " " . "email: " . $this->email ;
    }
    public function getTelefono()
    {
        echo "Teléfono: " . $this->telefono;
    }
}


// Herencia
class Empleado extends Persona
{
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }

}

class Proveedor extends Persona
{
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }
    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " " . "email: " . $this->email . " Empresa: " . $this->empresa;
    }
}

$empleado = new Empleado("Luis", "Navarro", "luis@example.com", "123456789", "EMP001", "IT");
$proveedor = new Proveedor("María", "Gómez", "maria@example.com", "987654321", "ABC Company");



echo '<pre>';
var_dump($empleado);
echo '</pre> <br>';
echo '<pre>';
var_dump($proveedor);
echo '</pre> <br>';

$empleado->mostrarInformacion();
echo '<br>';
$proveedor->mostrarInformacion();
echo '<br>';
$empleado->getTelefono();
echo '<br>';
$proveedor->getTelefono();

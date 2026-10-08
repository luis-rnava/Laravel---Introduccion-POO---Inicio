<?php

include 'includes/header.php';
include 'DB.php';

// Comunicar 2 classes
class Empleado
{
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
}

$luis = new Empleado('Rodolfo', 'Navarro', 'Sistemas', 'luis.navarro@example.com', 006);
$nombre = $luis->getNombre();
// echo $nombre;

$db = new DB($nombre);
// var_dump($db);
$db->guardar();

<?php
include 'includes/header.php';
// Atributos de una clase
class Empleado{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

$empleado = new Empleado;
$empleado->nombre = "John";
$empleado->apellido = "Doe";
$empleado->departamento = "IT";
$empleado->email = "john.doe@example.com";
$empleado->codigo = "EMP001";

echo '<pre>';
var_dump($empleado);
echo '</pre>';

$empleado2 = new Empleado;
$empleado2->nombre = "Jane";
$empleado2->apellido = "Smith";
$empleado2->departamento = "HR";
$empleado2->email = "hr@correo.com";
$empleado2->codigo = "EMP002";

echo '<pre>';
var_dump($empleado2);
echo '</pre>';
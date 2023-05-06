<?php

class Empleado {
  public $nombre;
  public $salario;
  public $departamento;

  function __construct($nombre, $salario, $departamento) {
    $this->nombre = $nombre;
    $this->salario = $salario;
    $this->departamento = $departamento;
  }

  function aumentar_salario($porcentaje) {
    $aumento = $this->salario * ($porcentaje / 100);
    $this->salario += $aumento;
  }
}

$empleado1 = new Empleado("Juan Pérez", 50000, "Ventas");
echo "Salario actual de " . $empleado1->nombre . " en el departamento de " . $empleado1->departamento . " es: " . $empleado1->salario . "<br>";
$empleado1->aumentar_salario(10);
echo "Salario actualizado de " . $empleado1->nombre . " en el departamento de " . $empleado1->departamento . " es: " . $empleado1->salario;

<?php

class Estudiante {
    public $nombre;
    public $edad;
    public $calificacion;

    public function actualizar_calificacion($nueva_calificacion) {
        $this->calificacion = $nueva_calificacion;
    }
}

$estudiante1 = new Estudiante();
$estudiante1->nombre = "Juan";
$estudiante1->edad = 18;
$estudiante1->calificacion = 4;

echo "La calificación actual de " . $estudiante1->nombre . " es: " . $estudiante1->calificacion . "<br>";

$estudiante1->actualizar_calificacion(5);

echo "La nueva calificación de " . $estudiante1->nombre . " es: " . $estudiante1->calificacion;

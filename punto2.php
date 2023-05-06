<?php

function calcular_volumen_cilindro($radio, $altura) {
    $pi = 3.1416;
    $volumen = $pi * $radio * $radio * $altura;
    return $volumen;
}

$radio = 5;
$altura = 10;
$volumen = calcular_volumen_cilindro($radio, $altura);
echo "El volumen del cilindro es: " . $volumen;


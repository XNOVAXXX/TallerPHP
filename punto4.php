<?php

function calcular_iva($total_producto, $iva = 10) {
    $iva_decimal = $iva / 100; 
    $monto_iva = $total_producto * $iva_decimal; 
    return $monto_iva;
}

$total_producto = 250;
$iva = 12; 

$monto_iva = calcular_iva($total_producto, $iva);
echo "El monto del IVA es: " . $monto_iva;


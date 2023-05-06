<?php

function nombreMes($numeroMes) {
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                   "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    
    if($numeroMes >= 1 && $numeroMes <= 12) {
        return $meses[$numeroMes-1];
    }
    else {
        return "Número de mes inválido";
    }
}

$numeroMes = 5;
echo "El mes correspondiente al número " . $numeroMes . " es " . nombreMes($numeroMes);

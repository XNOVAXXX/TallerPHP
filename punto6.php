<?php

function suma_arreglo($numeros) {
    $suma = 0; 

    foreach ($numeros as $numero) {
      $suma += $numero;
    }
  
    echo "La suma de los números es: " . $suma;
}

$numeros = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200);
suma_arreglo($numeros);

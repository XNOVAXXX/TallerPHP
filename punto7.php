<?php

class CuentaBancaria {
    private $titular;
    private $saldo;
    private $tipo_cuenta;
  
    public function __construct($titular, $saldo_inicial, $tipo_cuenta) {
      $this->titular = $titular;
      $this->saldo = $saldo_inicial;
      $this->tipo_cuenta = $tipo_cuenta;
    }
  
    public function depositar($cantidad) {
      $this->saldo += $cantidad;
      echo "Se depositaron $" . $cantidad . " en la cuenta de " . $this->titular . ". El saldo actual es de $" . $this->saldo . ".";
    }
  
    public function retirar($cantidad) {
      if ($cantidad <= $this->saldo) {
        $this->saldo -= $cantidad;
        echo "Se retiraron $" . $cantidad . " de la cuenta de " . $this->titular . ". El saldo actual es de $" . $this->saldo . ".";
      } else {
        echo "No se pudo retirar $" . $cantidad . " de la cuenta de " . $this->titular . " porque el saldo es insuficiente. El saldo actual es de $" . $this->saldo . ".";
      }
    }
}
 
$cuenta = new CuentaBancaria("Juan Perez", 5000, "corriente");
$cuenta->depositar(2000);
$cuenta->retirar(3000); 

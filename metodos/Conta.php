<?php

class Conta {
  public $numero;
  public $saldo;
  public $limite;
  public $agencia;

  function deposita($valor){
    $this->saldo += $valor;
  }

  function saca($valor) {
    if ($saldo >= $valor) {
      $this->saldo -= $valor;
      return true;
    } else {
      return false;
    }
  }

  function imprimeExtrato(){

    echo "############### EXTRATO DA CONTA ###############".PHP_EOL;
    echo "Conta Número: $this->numero".PHP_EOL;
    echo "Agência:      {$this->agencia->numero}".PHP_EOL;
    echo "Saldo:        $this->saldo".PHP_EOL;
    echo "Limite:       $this->limite".PHP_EOL;
    echo "################################################".PHP_EOL;
  }

  function consultaSaldoDisponivel(){
    return $this->saldo;
  }


}



?>

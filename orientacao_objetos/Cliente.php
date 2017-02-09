<?php

class Cliente {
  public $nome;
  public $codigo;
}


$cliente1 = new Cliente;
$cliente1->nome="Rafael Cosentino";
$cliente1->codigo=1;

$cliente2 = new Cliente;
$cliente2->nome="Jonas Hirata";
$cliente2->codigo=2;


echo "Código: $cliente1->codigo - Nome: $cliente1->nome ".PHP_EOL;
echo "Código: $cliente2->codigo - Nome: $cliente2->nome ".PHP_EOL;


?>

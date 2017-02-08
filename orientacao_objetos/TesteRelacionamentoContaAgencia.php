<?php

//spl_autoload_register();
require_once 'Conta.php';
require_once 'Agencia.php';

// EXERCICIO 1 DE AGREGAÇÃO

$conta = new Conta;
$conta->numero="1234";
$conta->saldo=500.00;
$conta->limite=800.00;

$agencia = new Agencia;
$agencia->numero="1234";

$conta->agencia = $agencia;

echo "### Conta ####".PHP_EOL;
echo "Conta Número: $conta->numero - Saldo: R$ $conta->saldo - Limite: R$ $conta->limite".PHP_EOL;
echo "Agência: {$conta->agencia->numero}".PHP_EOL;

 ?>

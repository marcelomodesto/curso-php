<?php

//spl_autoload_register();
require_once 'Conta.php';
require_once 'Agencia.php';


// EXERCICIO 1 DE MÉTODOS
$agencia = new Agencia;
$agencia->numero = 56789;

$conta = new Conta;
$conta->numero="1234";
$conta->agencia=$agencia;

$valorDeposito = 1000;

$conta->deposita($valorDeposito);
$conta->imprimeExtrato();

echo "Saldo Disponível na Conta: {$conta->consultaSaldoDisponivel()}".PHP_EOL;

//echo "### Conta ####".PHP_EOL;
//echo "Conta Número: $conta->numero - Saldo: R$ $conta->saldo - Limite: R$ $conta->limite".PHP_EOL;
//echo "Agência: {$conta->agencia->numero}".PHP_EOL;


 ?>

<?php

//spl_autoload_register();
require_once 'Conta.php';
require_once 'Agencia.php';


// EXERCICIO 1 DE MÉTODOS
$agencia = new Agencia;
$agencia->numero = 123;

$conta = new Conta($agencia);
$conta->numero="5678";
$conta->limite = 500;
$valorDeposito = 1000;
$conta->deposita($valorDeposito);
$conta->imprimeExtrato();


//echo "### Conta ####".PHP_EOL;
//echo "Conta Número: $conta->numero - Saldo: R$ $conta->saldo - Limite: R$ $conta->limite".PHP_EOL;
//echo "Agência: {$conta->agencia->numero}".PHP_EOL;


 ?>

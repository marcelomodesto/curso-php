<?php

//spl_autoload_register();
require_once 'Conta.php';
require_once 'Agencia.php';

// EXERCICIO 1 DE AGREGAÇÃO

$cliente = new Cliente;
$cliente->nome="Rafael Cosentino";
$cliente->codigo=123;


$cartao = new CartaoDeCredito;
$cartao->numero="111111";
$cartao->dataDeValidade="01/01/2013";
$cartao->cliente = $cliente;


echo "### Cartão ####".PHP_EOL;
echo "Número: $cartao->numero - Data de Validade: $cartao->dataDeValidade".PHP_EOL;
echo "Código: {$cartao->cliente->codigo} - Nome: {$cartao->cliente->nome} ".PHP_EOL;


 ?>

<?php

require_once 'Conta.php';

$conta = new Conta;
$conta->numero="5678-0";
$conta->imprimeContador();
$conta->imprimeNumero();

$conta1 = new Conta;
$conta1->numero="5678-1";
$conta1->imprimeContador();
$conta1->imprimeNumero();
$conta1->zeraContador();

$conta2 = new Conta;
$conta2->numero="5678-2";
$conta2->imprimeContador();
$conta2->imprimeNumero();

$conta3 = new Conta;
$conta3->numero="5678-3";
$conta3->imprimeContador();
$conta3->imprimeNumero();


?>

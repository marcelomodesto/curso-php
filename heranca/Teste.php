<?php

//spl_autoload_register();
require_once 'Funcionario.php';
require_once 'Gerente.php';
require_once 'Secretaria.php';
require_once 'Telefonista.php';


$g = new Gerente;
$g->nome="Marcelo Martins (Gerente)";
$g->salario=2000.45;
$g->senha= '$%#*6oo!';
$g->usuario='mma';
$g->imprime();
echo "Bonificação: {$g->calculaBonificacao()}".PHP_EOL.PHP_EOL;

$t = new Telefonista;
$t->nome="Maria Soares (Telefonista)";
$t->salario=1355.45;
$t->estacaoDeTrabalho = 13;
$t->imprime();
echo "Bonificação: {$t->calculaBonificacao()}".PHP_EOL.PHP_EOL;

$s = new Secretaria;
$s->nome="Andreia Ribeiro (Secretaria)";
$s->salario=1430.33;
$s->ramal='6524';
$s->imprime();
echo "Bonificação: {$s->calculaBonificacao()}".PHP_EOL.PHP_EOL;



 ?>

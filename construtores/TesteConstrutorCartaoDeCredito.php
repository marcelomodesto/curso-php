<?php

//spl_autoload_register();
require_once 'CartaoDeCredito.php';




$cartao1 = new CartaoDeCredito("11111");
$cartao1->dataDeValidade="01/01/2013";



$cartao2 = new CartaoDeCredito("22222");
$cartao2->dataDeValidade="01/01/2014";



echo "Número: $cartao1->numero - Data de Validade: $cartao1->dataDeValidade".PHP_EOL;
echo "Número: $cartao2->numero - Data de Validade: $cartao2->dataDeValidade".PHP_EOL;


 ?>

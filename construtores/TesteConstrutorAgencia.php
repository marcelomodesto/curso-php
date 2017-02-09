<?php

require_once 'Agencia.php';


$agencia1 = new Agencia(1234);
$agencia2 = new Agencia(5678);

echo "Agencia: $agencia1->numero".PHP_EOL;
echo "Agencia: $agencia2->numero".PHP_EOL;

 ?>

<?php

//spl_autoload_register();
require_once 'Funcionario.php';


// EXERCICIO 1 DE MÉTODOS
$funcionario = new Funcionario;
$funcionario->nome="Marcelo Martins";
$funcionario->salario=1800.57;


$funcionario->aumentaSalario(300);
$funcionario->consultaDados();



 ?>

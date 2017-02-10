<?php

class Funcionario {
  public $nome;
  public $salario;



  public function imprime(){
    echo "### FUNCIONÁRIO ###".PHP_EOL;
    echo "Nome: $this->nome".PHP_EOL;
    echo "Salário: $this->salario ".PHP_EOL;
    echo PHP_EOL;
  }


  public function calculaBonificacao(){
    return $this->salario * 0.1;
  }


}
?>

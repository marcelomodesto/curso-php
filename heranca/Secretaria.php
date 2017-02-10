<?php

class Secretaria extends Funcionario {
  public $ramal;


  public function imprime(){
    echo "### FUNCIONÁRIO ###".PHP_EOL;
    echo "Nome: $this->nome".PHP_EOL;
    echo "Salário: $this->salario ".PHP_EOL;
    echo "Ramal: $this->ramal ".PHP_EOL;
    echo PHP_EOL;
  }

}
?>

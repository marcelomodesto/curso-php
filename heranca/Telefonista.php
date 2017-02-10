<?php

class Telefonista extends Funcionario {
      public $estacaoDeTrabalho;


      public function imprime(){
        echo "### FUNCIONÁRIO ###".PHP_EOL;
        echo "Nome: $this->nome".PHP_EOL;
        echo "Salário: $this->salario ".PHP_EOL;
        echo "Estação de Trabalho: $this->estacaoDeTrabalho ".PHP_EOL;
        echo PHP_EOL;
      }
}
?>

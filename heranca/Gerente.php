<?php

class Gerente extends Funcionario {

  public $usuario;
  public $senha;

  public function imprime(){
    echo "### FUNCIONÁRIO ###".PHP_EOL;
    echo "Nome: $this->nome".PHP_EOL;
    echo "Salário: $this->salario ".PHP_EOL;
    echo "Usuário: $this->usuario ".PHP_EOL;
    echo "Senha: $this->senha ".PHP_EOL;
    echo PHP_EOL;
  }

  public function calculaBonificacao(){
    return $this->salario * 0.6 + 100;
  }

}
?>

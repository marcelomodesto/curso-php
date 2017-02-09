<?php

class Funcionario {
  public $nome;
  public $salario;


  public function aumentaSalario ($valor){
      $this->salario += $valor;
  }

  public function consultaDados(){
    echo "Nome: $this->nome - Salário: $this->salario ".PHP_EOL;
  }


}
?>

<?php

class CartaoDeCredito {
  public $numero;
  public $dataDeValidade;
  public $cliente;

  public function __construct($numero) {
    $this->numero = $numero
    ;
  }
}


?>

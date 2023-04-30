<?php

  class Cachorro {
    public $nome;
    public $cor;
    public $patas;

    function_construct($nome, $cor, $patas){
        $this->nome = $nome;
        $this->cor = $cor;
        $this->patas = $patas;
    }

    public function exibirAnimal(){
        echo "O nome do cahcorro é $this->nome, ele é da cor $this->cor e tem $this->patas patas <br>";
    }
  }

  $dg = new Cachorro("Dog", "preto", 4);
  $dg->exibirAnimal();
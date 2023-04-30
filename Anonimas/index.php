<?php

  $pessoa = new class(){
    public $nome = "Darlison Silva";

    public function dizerNome(){
      echo "Olá, meu nome é $this->nome <br>";
    }
  }; // nese tipo de classe, precisamos adicionar ";" no final

  echo $pessoa->nome . "<br>";
  $pessoa->dizerNome();
<?php

  class Humano{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstante(){

        // quando for método, eu devo usar o "self" em vez do "this"
        echo self::BRACOS . "<br>";
    }
  }


  // usamos os dois pontos dois pontos "::" para chamar a constante; 
  $darlison = new Humano;
  echo $darlison::OLHOS . "<br>";

  $darlison ->mostrarConstante();
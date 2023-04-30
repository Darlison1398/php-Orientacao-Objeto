<?php

  class Humano {
    public function falar(){
        echo "Olá . <br>";
    }
  }

  $darlison = new Humano;

  if (is_object($darlison)){
    echo "é um objeto <br>";
  }else{
    echo "Não é um objeto <br>";
  }
  
  if (is_object($teste)){
    echo "é um objeto <br>";
  }else{
    echo "Não é um objeto <br>";
  }
  
  echo "<br>";

  echo get_class($darlison). "<br>";
  echo "<br>";

  if (method_exists($darlison, "falar")){
    echo "Método existe <br>";
  }else {
    echo "Método não existe <br>";
  }

  if (method_exists($darlison, "ADr")){
    echo "Método existe <br>";
  }else {
    echo "Método não existe <br>";
  }
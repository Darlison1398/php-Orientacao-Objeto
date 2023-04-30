<?php

  class Car {
    public $portas;
    public $cor;
    public $marca;

    function_construct($portas, $cor, $marca){
        $this-> portas = $portas;
        $this-> cor = $cor;
        $this-> marca = $marca;
    }
  }

  $ferrari = new Car(4, "Vermelha", "Ferrari");

  echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor e $ferrari->portas portas <br>";
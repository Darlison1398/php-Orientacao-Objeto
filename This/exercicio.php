<?php

 class Carro {
    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel){
        $this->velocidaeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }
 }

 $bmw = new Carro;

 $bmw->cor = "Branca";
 $bmw->tetoSolar = true;

 $bmw->setVelocidadeMaxima(200);
 $bmw->getVelocidadeMaxima();
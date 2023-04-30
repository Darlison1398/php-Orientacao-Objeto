<?php

 class Humano {
    public $idade = 24;

    public function falar(){
        echo "Olá, mundo. Eu aind avou ser bem sucedido e vencedor na vida!!! <br>";
    }

    private function gritar(){
        echo "PHP é muito BOOOOMMMMM!!! <br>";
    }

    public function acessaGrito(){
        $this->gritar();
    }

    protected function falarBaixo(){
        echo "Propriedade protected: falar baixo <br>";
    }

    public function acessaFalarBaixo(){
        $this->falarBaixo();
    }
 }

 class Programador extends Humano {

 }

 $dr = new Humano;
 $cr = new Programador;

 $dr->falar();
 $dr->acessaGrito();

 echo "<br>";
 
 echo $cr->idade . "<br>";
 $cr->falar();
 $cr->acessaGrito();
 $cr->acessaFalarBaixo();
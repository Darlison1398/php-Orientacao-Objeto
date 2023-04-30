<?php

class Car { 
    public $rodas = 4;
    public $aro = 20;

    # adicionando uma função
    function Ligar(){
        echo "Vrummmmmm!!! <br>";
    }
}

$ferrari = new Car;
echo $ferrari ->aro . "<br>";
echo $ferrari ->rodas . "<br>";

// acessando a function ligar
$ferrari -> ligar();
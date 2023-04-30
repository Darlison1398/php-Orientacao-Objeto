<?php
 
 // usamos uma sintaxe de function, porém, dentro da classe;
 // podemos retornar ou imprimir dados, dependendo da nossa regra de negócios;

 class Pessoa{
    function falar(){
        echo "Olá, eu sou um objeto! <br>";
    }

    function somar($x, $y){
        echo $x + $y . "<br>";
    }
 }

 $darlison = new Pessoa;
 $carla = new Pessoa;

 $darlison -> falar();
 $carla -> falar();

 echo "<br>";

 $darlison -> somar(2, 3);
 $carla -> somar(10, 12);
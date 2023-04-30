<?php

/* crie uma classe cachorro; crie o método latir e andar; Execute o método
em novas instâncias da classe;
*/

class Cachorro{
    function latir(){
        echo "O cachorro late <br>";
    }

    function andar(){
        echo "O cachorro anda <br>";
    }
    
    #com parâmetros
    function correr($m){
        echo "O cachorro correu $m metro <br>";
    }
}

$dog = new Cachorro;
$spike = new Cachorro;

$dog -> latir();
$dog -> andar();
$spike -> latir();
$spike -> andar();

echo "<br>";
echo "Com parâmetros <br>";
# eu também posso passar parâmetros pra função
$dog -> correr(500);


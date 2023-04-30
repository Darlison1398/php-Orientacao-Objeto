<?php
 
 abstract class Teste {

    public static function testandoClasse(){
        echo "Este método é de uma classe abstrata <br>";
    }

    abstract public function testeABS();

 }

 // não podemos instanciar uma classe abstrata;

 Teste::testandoClasse();

 class Nova extends Teste {

    public function testeABS(){
        echo "Teste método abstrato <br>";
    }

 }

 $n = new Nova;
 $n->testeABS();
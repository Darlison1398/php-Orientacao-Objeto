<?php

 class Animal {
    function escolherNome($nome){
        $this -> nome = $nome;
    }

    function latir(){
        echo "Au au au <br>";
    }
 }

 $dog = new Animal;

 echo "O nome do animal é $dog -> nome <br>";

 $dog -> escolherNome("Doguinho");
 $dog->latir();


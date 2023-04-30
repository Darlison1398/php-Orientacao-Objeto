<?php

/*
Crie um aclasse Humano com algumas propriedades e o método falar;
Crie uma outra classe Professor que herda de humano, crie também as propriedades e métodos particulares desta classe;
exiba os valores das propriedades da classe pai e também utilize os métodos;
*/
 
 class Humano {
    public $maos = 2;
    public $pernas = 2;

    public function falar(){
        echo "Olá, eu sou um humano <br>";
    }
 }

 class Professor extends Humano{
    public $disciplina = "Matemática";

    public function estaLecionando(){
        echo "O professor está dando aula de $this->disciplina <br>";
    }
 }

 $darlison = new Humano;

 echo "$darlison->maos <br>";

 $darlison->falar();

 $jozelia = new Professor;
 echo "$jozelia->pernas <br>";
 echo "$jozelia->disciplina <br>";

 $jozelia->falar();
 $jozelia->estaLecionando();


<?php
 
 interface Caracteristicas {
  
   # quando for "const", não botar o $ antes da variável;
    const nome = "Darlison Silva";
    public function falar();
 }

 class Humano implements Caracteristicas{
    public $idade = 24;

    public function falar(){
      echo "Olá, PHP! <br>";
    }

    public function dizerNome(){
      echo "Meu nome é " . self::nome . "<br>";
    }
 }

 $dr = new Humano;

 $dr->falar();
 $dr->dizerNome();

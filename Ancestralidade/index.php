<?php

 class Humano{

 }

 class Animal {
     
 }

 class Professor extends Humano{

 }

 $darlison = new Humano;
 $dog = new Animal;
 $marcos =  new Professor;

 if ($darlison instanceof Humano){
    echo "Darlison é um humano!!! <br>";
 }

 if ($dog instanceof Humano){
    echo "Dog é um humano!!! <br>";
 }else{
    echo "O Dog não é um humano! <br>";
 }

 if ($marcos instanceof Humano){
    echo "Marcos é um humano!!! <br>";
 }else{
    echo "Marcos, não é um humano! <br>";
 }

 if ($marcos instanceof Professor){
    echo "Marcos é um professor!!! <br>";
 }else{
    echo "Marcos não é professor! <br>";
 }

 if ($dog instanceof Professor){
    echo "Dog é um professor!!! <br>";
 }else{
    echo "O Dog não é um professor! <br>";
 }
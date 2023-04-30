<?php

class Pessoa{
    public $nome;
    public $idade;

    function andar($m){
        echo "A pessoa andou $m metros <br>";
    }
}

$darlison = new Pessoa;

$darlison -> nome = "Darlison Silva";
$darlison -> idade = 24;
echo "O nome dele é $darlison -> nome, e tem $darlison -> idade anos <br>";

?>
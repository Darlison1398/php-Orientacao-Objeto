<?php

# Car e Mecanico, contém propriedades públicas; Caminhao, contém propriedade privada.
 class Car {
    public $rodas = 4;
 }

 class Mecanico {
    public function alterarRodas($obj){
        $obj->rodas = 10;
    }
 }

 # exemplo com propriedade privada
 class Caminhao {
    public $placa = 1;

    // propriedade privada
    private $vidro = "Sem prelícula";

    // protected
    protected $portas = "Caminhão tem portas";

    public function getVidro(){
        return $this->vidro;
    }

    public function getPortas(){
        return $this->portas;
    }
 }

 $carro = new Car;
 echo $carro->rodas . "<br>";

 echo "<br>";
 $darlison = new Mecanico;
 $darlison->alterarRodas($carro);
 echo $carro->rodas . "<br>";
 echo "<br>";

 echo "Método privado e protected <br>";
 $veiculo = new Caminhao;
 echo $veiculo->getVidro() . "<br>";
echo $veiculo->getPortas();

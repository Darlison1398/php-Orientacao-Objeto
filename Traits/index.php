<?php
 
 trait Objeto {
    public function teste(){
        echo "Testando trait de objeto <br>";
    }
 }

 trait Testando{
    public function traiTeste(){
        echo "Este método é da trait Testando <br>";
    }
 }

 class Central {
    use Objeto;
    use Testando;
 }

 $x = new Central;
 $x->teste();

 $x->traiTeste();
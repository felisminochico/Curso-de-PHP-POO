<?php
class Caneta {
    var $modelo;
    var $cor;
    var $tampada;
    var $carga;
    var $ponta;
    
    function rabiscar(){
        if($this->tampada == true){
            echo "<p>ERRO: Não pode rabiscar com a Caneta tampada. Por favor, DESTAMPE!";
        }else{
            echo "<p>Caneta DESTAMPADA! Estou rabiscando...</p>";
        }
    }
   
    function tampar(){
        $this->tampada = true;
    }
    
    function destampar(){
        $this->tampada = false;
    }
}


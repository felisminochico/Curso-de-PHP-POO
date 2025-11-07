<?php 
    require_once "Alimentos.php";

    class Carnivoro extends Alimentos{
        
        public function __construct(){
            $this->setTipo("Carnívoro");
        }

        public function apresentar(){
            echo "<p>Olá, eu sou alimento {$this->getNome()} do tipo ". $this->getTipo();
        }
    }
?>
<?php 
    require_once "Alimentos.php";

    class Vegetais extends Alimentos{

        public function __construct(){
            $this->setTipo("Vegetal");
        }

        public function apresentar(){
            echo "<p>Oá, eu sou alimento ". $this->getNome(). " do tipo ". $this->getTipo();
        }
    }
?>
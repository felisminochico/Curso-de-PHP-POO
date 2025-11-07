<?php 
    interface Controle{
        public function consultar();
        public function depositar(float $sal);
        public function levantar(float $sal);
    }
?>
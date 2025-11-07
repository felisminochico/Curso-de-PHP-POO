<?php 
    interface ControleContaBanco{
        public function transferir(Cliente $receptor, float $saldo);
        public function levantar(float $saldo);
        public function depositar(Cliente $receptor, float $saldo);
        public function consultar();
    }
?>
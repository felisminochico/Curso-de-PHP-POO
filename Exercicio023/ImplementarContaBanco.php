<?php 
    interface ImplementarContaBanco{
        public function criarConta(int $numeroContaBanco);
        public function consultarSaldo();
        public function depositar(float $saldo, Pessoa $pessoa);
        public function transferir(float $saldo, Pessoa $pessoa);
    }
?>
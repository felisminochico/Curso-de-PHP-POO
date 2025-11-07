<?php
    require_once "./casa.php";

    interface Controle{
        public function entrar();
        public function sair();
        public function ligarTV();
        public function desligarTV();
        public function dormir();
        public function acordar();
        public function assistir();
    }
?>
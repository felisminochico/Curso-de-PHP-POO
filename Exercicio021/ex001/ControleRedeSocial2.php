<?php 
    interface ControleRedeSocial2{
        public function enviarMensagem(RedeSocial $redeSocial, Pessoa $pessoa, string $mensagem);
        public function consultarMensagens(RedeSocial $redeSocial);
    }
?>
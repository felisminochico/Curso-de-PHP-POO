<?php 
    interface ControleRedeSocial{
        // public function criarConta(RedeSocial $redeSocial);
        public function enviarMensagem(Usuario $pessoa, string $mensagem);
        public function verMensagens();
        public function lerMensagens();
    }
?>
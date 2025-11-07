<?php
class Carteira {
    var $tamanho;
    var $cor;
    var $bolsos_internos;
    var $valor_interno;
    var $carteira_aberta;
    
    function abrirCarteira(){
        $this->carteira_aberta = true;
        echo "<p>A Carteira foi aberta com êxito.</p>";
    }
    
    function colocarDinheiro(){
        if($this->carteira_aberta == true){
            $this->valor_interno += 500;
            echo "<p>Dinheiro colocado na Carteira $this->valor_interno.</p>";
        }else{
            echo "<p>ERRO: A Carteira está fechada. Por favor, ABRA!";
        }
    }
    
    function fecharCarteira(){
        $this->carteira_aberta = false;
        echo "<p>A Carteira foi fechada com êxito.</p>";
    }
}
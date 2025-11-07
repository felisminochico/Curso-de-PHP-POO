<?php
require_once './Aluno.php';

class Bolsista extends Aluno{
    private int $bolsa;
    
    public function getBolsa(): int {
        return $this->bolsa;
    }

    public function setBolsa(int $bolsa): void {
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa(){
        
    }
    
    #[\Override]
    public function pagarMensalidade(){
        echo "<p>{$this->getNome()} é um Bolsista! A sua mensalidade é mais cara!</p>";
    }
}

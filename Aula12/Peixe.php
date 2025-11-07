<?php
require_once './Animal.php';

class Peixe extends Animal{
    private string $corEscama;
    
    public function getCorEscama(): string{
        return $this->corEscama;
    }
    
    public function setCorEscama(string $corEscama): void{
        $this->corEscama = $corEscama;
    }

    public function soltarBolha(){
        echo "<p>Soltando bolhas...</p>";
    }
    
    #[\Override]
    public function alimentar() {
        echo "<p>Comendo substâncias...</p>";
    }

    #[\Override]
    public function emitirSom() {
        echo "<p>Peixe não tem som...</p>";
    }

    #[\Override]
    public function locomover() {
        echo "<p>Nadando...</p>";
    }
}

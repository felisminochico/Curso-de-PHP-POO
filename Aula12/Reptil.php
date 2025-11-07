<?php
require_once './Animal.php';

class Reptil extends Animal{
    private string $corEscama;
    
    public function getCorEscama(): string{
        return $this->corEscama;
    }
    
    public function setCorEscama(string $corEscama): void{
        $this->corEscama = $corEscama;
    }

    #[\Override]
    public function alimentar() {
        echo "<p>Comendo frutas...</p>";
    }

    #[\Override]
    public function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }

    #[\Override]
    public function locomover() {
        echo "<p>Rastejando...</p>";
    }
}

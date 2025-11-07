<?php
require_once './Animal.php';

class Mamifero extends Animal{
    private string $corPelo;
    
    public function getCorPelo(): string{
        return $this->corPelo;
    }
    
    public function setCorPelo(string $corPelo): void{
        $this->corPelo = $corPelo;
    }
    
    #[\Override]
    public function locomover(){
        echo "<p>Correndo...</p>";
    }
    
    #[\Override]
    public function alimentar() {
        echo "<p>Mamando...</p>";
    }
    
    #[\Override]
    public function emitirSom() {
        echo "<p>Som de Mamífero!</p>";
    }
}

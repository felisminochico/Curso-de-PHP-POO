<?php
require_once './Animal.php';

class Ave extends Animal{
    private string $corPena;
    
    public function getCorPena(): string{
        return $this->corPena;
    }
    
    public function setCorPena(string $corPena): void{
        $this->corPena = $corPena;
    }
    
    public function fazerNinho(){
        echo "<p>Fazendo um ninho...</p>";
    }
    
    #[\Override]
    public function locomover() {
        echo "<p>Voando...</p>";
    }
    
    #[\Override]
    public function alimentar() {
        echo "<p>";
    }
    
    #[\Override]
    public function emitirSom() {
        echo "<p>Som de Ave!</p>";
    }
}

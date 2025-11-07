<?php
require_once './Animal.php';

class Mamifero extends Animal{
    protected string $corPelo;
    
    public function getCorPelo(): string {
        return $this->corPelo;
    }

    public function setCorPelo(string $corPelo): void {
        $this->corPelo = $corPelo;
    }

    #[\Override]
    public function emitirSom(){
        echo "<p>Som de Mamífero</p>";
    }
}

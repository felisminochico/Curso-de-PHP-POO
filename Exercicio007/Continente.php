<?php
require_once './Mundo.php';

class Continente extends Mundo{
    protected float $espaco;
    private int $totalPaises;
    
    public function __construct(){
        $this->setTotalPaises(57);
    }
    
    public function getEspaco(): float {
        return $this->espaco;
    }

    public function setEspaco(float $espaco): void {
        $this->espaco = $espaco;
    }
    
    private function getTotalPaises(): int {
        return $this->totalPaises;
    }

    private function setTotalPaises(int $totalPaises): void {
        $this->totalPaises = $totalPaises;
    }
    
    public function apresentar(){
        echo "<p>Continente {$this->getNome()}, com espaço territorial de {$this->getEspaco()} e total de Países: {$this->getTotalPaises()}</p>";
    }
}

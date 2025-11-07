<?php
require_once './Continente.php';

class Pais extends Continente{
    private int $totalProvincias;
    
    #[\Override]
    public function __construct(){
        $this->setTotalProvincias(18);
    }
    
    private function getTotalProvincias(): int {
        return $this->totalProvincias;
    }

    private function setTotalProvincias(int $totalProvincias): void {
        $this->totalProvincias = $totalProvincias;
    }

    #[\Override]
    public function apresentar(){
        echo "<p>País: {$this->getNome()}, espaço territorial: {$this->getEspaco()}, Total de pessoas: {$this->getTotalPessoas()} ";
        echo "e Total de Províncias: {$this->getTotalProvincias()}</p>";
    }
}

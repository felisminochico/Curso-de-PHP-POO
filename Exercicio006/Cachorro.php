<?php
require_once './Animal.php';

class Cachorro extends Animal{
    private bool $pau;
    
    public function __construct(){
        $this->setSom("Uuh, Uuh!");
        $this->setPau(false);
    }
    
    public function getPau(): bool {
        return $this->pau;
    }

    public function setPau(bool $pau): void {
        $this->pau = $pau;
    }

    public function buscarPau(){
        if($this->getPau()){
            echo "<p>Buscando o Pau..</p>";
        }else{
            echo "<p>O Pau não foi atirado!";
        }
    }
    
    public function ladrar(){
        echo "<p>Ladrando: {$this->getSom()}</p>";
    }
}

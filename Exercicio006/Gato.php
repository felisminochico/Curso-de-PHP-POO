<?php
require_once './Animal.php';

class Gato extends Animal{
    private bool $trepar;
    
    public function __construct(){
        $this->setSom("Miau, Miau!");
    }
    
    public function getTrepar(): bool {
        return $this->trepar;
    }

    public function setTrepar(bool $trepar): void {
        $this->trepar = $trepar;
    }

    public function treparG(){
        if($this->getTrepar()){
            echo "<p>Estou trepando...</p>";
        }else{
            echo "<p>Não estou trepando...</p>";
        }
    }
    
    public function miar(){
        echo "<p>Miando: {$this->getSom()}</p>";
    }
}

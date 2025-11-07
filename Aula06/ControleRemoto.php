<?php
require_once "./Controlador.php";

class ControleRemoto implements Controlador {
    private int $volume;
    private bool $ligado;
    private bool $tocando;
    
    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    private function getVolume(){
        return $this->volume;
    }
    
    private function setVolume(int $v){
        $this->volume = $v;
    }
    
    private function getLigado(){
        return $this->ligado;
    }
    
    private function setLigado(bool $l){
        $this->ligado = $l;
    }
    
    private function getTocando(){
        return $this->tocando;
    }
    
    private function setTocando(bool $t){
        $this->tocando = $t;
    }
    
    #[\Override]
    public function ligar(){
        $this->setLigado(true);
    }
    
    #[\Override]
    public function desligar(){
        if($this->getLigado()){
            $this->setLigado(false);
        }
    }
    
    #[\Override]
    public function abrirMenu(){
        if($this->getLigado()){
            echo "<p>Estado da TV: Ligado</p>";
            echo "<p>Volume atual: {$this->getVolume()}</p>";
            for($c = 1; $c <= $this->getVolume(); $c += 1){
                echo "|";
            }
            if($this->getTocando()){
                echo "<p>Estado da TV: Tocando...!</p>";
            }else{
                echo "<p>Estado da TV: Pausado</p>";
            }
        }else{
            echo "<p>Estado da TV: Desligado</p>";
        }
    }
    
    #[\Override]
    public function fecharMenu(){
        echo "Menu fechado com sucesso!";
    }
    
    #[\Override]
    public  function aumentarVolume(){
        if($this->getLigado()){
            if($this->getVolume() == 100){
                $this->setVolume(100);
            }else{
                $this->setVolume($this->getVolume() + 1);
            }
        }else{
            echo "<p>Impossível aumentar. A TV está desligada!</p>";
        }
    }
    
    #[\Override]
    public function diminuirVolume(){
        if($this->getLigado()){
            if($this->getVolume() == 0){
                $this->setVolume(0);
            }else{
                $this->setVolume($this->getVolume() - 1);
            }
        }else{
            echo "<p>Impossível diminuir. A TV está desligada!</p>";
        }
    }
    
    #[\Override]
    public function ligarMudo(){
        if($this->getLigado()){
            $this->setVolume(0);
        }else{
            echo "<p>Impossível colocar no Mudo. A TV está desligada!</p>";
        }
    }
    
    #[\Override]
    public function desligarMudo(){
        if($this->getLigado()){
            $this->setVolume(50);
        }else{
            echo "<p>Impossível diminuir. A TV está desligada!</p>";
        }
    }
    
    #[\Override]
    public function play(){
        if($this->getLigado()){
            $this->setTocando(true);
        }
    }
    
    #[\Override]
    public function pause(){
        if($this->getLigado()){
            $this->setTocando(false);
        }
    }
}

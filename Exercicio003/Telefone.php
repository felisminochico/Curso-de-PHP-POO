<?php
require_once './Controlador.php';

class Telefone implements Controlador{
    private int $carga;
    private bool $ligado;
    private bool $tocando;
    private bool $carregando;
    private string $dono;
    
    public function __construct(){
        $this->carga = 50;
        $this->ligado = false;
        $this->tocando = false;
        $this->dono = "Sem Dono";
        $this->carregando = false;
    }
    
    private function getCarga(){
        return $this->carga;
    }
    
    private function setCarga(int $carga){
        $this->carga = $carga;
    }
    
    private function getLigado(){
        return $this->ligado;
    }
    
    private function setLigado(bool $ligado){
        $this->ligado = $ligado;
    }
    
    private function getTocando(){
        return $this->tocando;
    }
    
    private function setTocando(bool $tocando){
        $this->tocando = $tocando;
    }
    
    private function getDono(){
        return $this->dono;
    }
    
    private function setDono(string $dono){
        $this->dono = $dono;
    }
    
    private function getCarregar(){
        return $this->carregando;
    }
    
    private function setCarregar(bool $carregando){
        $this->carregando = $carregando;
    }
    
    #[\Override]
    public function ligar(){
        if($this->getCarga() <= 0){
            echo "<p><strong>Impossível ligar:</strong> O Telefone não tem carga.</p>";
        }else{
            $this->setLigado(true);
        }
    }
    
    #[\Override]
    public function desligar(){
        if($this->getLigado()){
            $this->setLigado(false);
        }else{
            echo "<p><strong>Impossível desligar:</strong> O Telefone já encontra-se desligado.</p>";
        }
    }
    
    #[\Override]
    public function fazerChamada(){
        $this->setCarga($this->getCarga() - 2);
        if($this->getLigado()){
            echo "<p>Fazendo chamada...</p>";
        }else{
            echo "<p><strong>Impossível fazer chamda:</strong> O telefone está desligado.</p>";
        }
    }
    
    #[\Override]
    public function fazerFoto(){
        $this->setCarga($this->getCarga() - 5);
        if($this->getLigado()){
            echo "<p>Fazzendo foto...</p>";
        }else{
            echo "<p><strong>Impossível fazer foto:</strong> O Telefone está desligado.</p>";
        }
    }
    
    #[\Override]
    public function ouvirMusica() {
        $this->setCarga($this->getCarga() - 8);
        if($this->getLigado()){
            $this->setTocando(true);
            echo "<p>Tocando Música...</p>";
        }else{
            echo "<p><strong>Impossível tocar Música:</strong> O Telefone está desligado.</p>";
        }
    }
    
    #[\Override]
    public function carregar(){
        $this->setCarga($this->getCarga() + 1);
        $this->setCarregar(true);
    }
    
    #[\Override]
    public function status() {
        echo "<p>Estado do Telefone: ". ($this->getLigado()?"Ligado":"Desligado");
        echo "<p>Carga: {$this->getCarga()}%";
        echo $this->getTocando()?"<p>Ouvindo Música</p>": "<p>Não ouvindo Música</p>";
        echo $this->getCarregar()?"<p>Carregando...</p>":"Não carregando...";
    }
}

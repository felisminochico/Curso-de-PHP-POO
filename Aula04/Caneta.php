<?php
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    private $tampada;
    
    public function __construct($mo, $c, $po){
        $this->modelo = $mo;
        $this->ponta = $po;
        $this->cor = $c;
        $this->tampar();
    }
    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo(string $m){
        $this->modelo = $m;
    }
    
    public function getPonta(){
        return $this->ponta;
    }
    
    public function setponta(float $p){
        $this->ponta = $p;
    }
    
    
}

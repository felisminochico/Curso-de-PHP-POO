<?php

abstract class Animal {
    protected float $peso;
    protected int $idade;
    protected int $membros;
    
    public function getPeso(): float {
        return $this->peso;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getMembros(): int {
        return $this->membros;
    }

    public function setPeso(float $peso): void {
        $this->peso = $peso;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function setMembros(int $membros): void {
        $this->membros = $membros;
    }

    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();
}

<?php

abstract class Pessoa {
    protected string $nome;
    protected int $idade;
    protected string $sexo;
    protected int $experiencia;
    
    public function __construct(string $nome, int $idade, string $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->setExperiencia(0);
    }

    
    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function getExperiencia(): int {
        return $this->experiencia;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }

    public function setExperiencia(int $experiencia): void {
        $this->experiencia = $experiencia;
    }

    protected function ganharExperiencia(int $v){
        $this->setExperiencia($this->getExperiencia() + $v);
    }
}

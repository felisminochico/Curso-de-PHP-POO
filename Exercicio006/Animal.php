<?php
class Animal {
    private string $nome;
    private string $sexo;
    private string $som;
    
    public function getNome(): string {
        return $this->nome;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function getSom(): string {
        return $this->som;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }

    protected function setSom(string $som): void {
        $this->som = $som;
    }
}

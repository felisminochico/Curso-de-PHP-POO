<?php
abstract class Mundo {
    protected string $nome;
    protected int $totalPessoas;
    
    public function getNome(): string {
        return $this->nome;
    }

    public function getTotalPessoas(): int {
        return $this->totalPessoas;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setTotalPessoas(int $totalPessoas): void {
        $this->totalPessoas = $totalPessoas;
    }
}

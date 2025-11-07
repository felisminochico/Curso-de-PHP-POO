<?php 
    abstract class Mundo{
        protected string $nome;
        protected float $espaco;
        protected int $totalPessoas;

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getEspaco(): float{
            return $this->espaco;
        }

        public function setEspaco(float $espaco): void{
            $this->espaco = $espaco;
        }

        public function getTotalPessoas(): int{
            return $this->totalPessoas;
        }

        public function setTotalPessoas(int $totalPessoas): void{
            $this->totalPessoas = $totalPessoas;
        }

        abstract public function detalhes();
    }
?>
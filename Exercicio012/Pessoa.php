<?php 
    class Pessoa{
        private string $nome;
        private int $idade;

        public function __construct(string $nome, int $idade){
            $this->setNome($nome);
            $this->setIdade($idade);
        }

        public function getNome(): string{
            return $this->nome;
        }

        private function setNome(string $nome): void{
            $this->nome = $nome;
        }

        private function getIdade(): int{
            return $this->idade;
        }

        private function setIdade(int $idade): void{
            $this->idade = $idade;
        }
    }
?>
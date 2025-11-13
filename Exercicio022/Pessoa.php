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

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getIdade(): int{
            return $this->idade;
        }

        public function setIdade(int $idade): void{
            $this->idade = $idade;
        }

        public function apresentar(): void{
            echo("<p>Olá, eu sou {$this->getNome()}! Tenho {$this->getIdade()} anos de idade.</p>");
        }

        public function __call($funcao, $argumentos){
            echo("<p><strong>ERRO:</strong> A Função $funcao e o argumento $argumentos[0] não existem.</p>");
        }

        public function toArray(): array{
            return ["nome" => $this->getNome(), "idade" => $this->getIdade()];
        }
    }
?>
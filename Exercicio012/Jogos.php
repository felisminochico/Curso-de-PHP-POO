<?php 
    require_once "./Controle.php";
    require_once "./Pessoa.php";

    class Jogos implements Controle{
        private string $nome;
        private Pessoa $jogador;
        
        public function __construct(string $nome){
            $this->setNome($nome);
        }

        private function getNome(): string{
            return $this->nome;
        }

        private function setNome(string $nome): void{
            $this->nome = $nome;
        }

        #[\Override]
        public function detalhes(Pessoa $p){
            $this->jogador = $p;
            echo ("<h3>Detalhes</h3>");
            echo ("O Jogo <strong>". $this->getNome(). "</strong> está sendo jogado por <strong>". $this->jogador->getNome(). "</strong>");
        }
    }
?>
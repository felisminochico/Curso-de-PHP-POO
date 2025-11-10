<?php 
    require_once "./Pessoa.php";

    class RedeSocial{
        private string $nome;
        private array $usuarios = [];

        public function __construct(string $nome){
            $this->setNome($nome);   
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getUsuarios(): array{
            return $this->usuarios;
        }

        public function setUsuarios(string $nome): void{
            array_push($this->usuarios, $nome);
        }

        public function novoUsuario(Pessoa $pessoa){
            $this->setUsuarios($pessoa->getNome());
        }

        public function detalhesRedeSocial(){
            echo("<h4>Detalhes da Rede Social</h4>");
            echo("<p>Plataforma: {$this->getNome()}</p>");
            echo("<p>Usuários: ". count($this->getUsuarios()). "</p>");
        }
    }
?>
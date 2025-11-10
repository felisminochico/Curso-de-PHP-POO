<?php 
    require_once "./Pessoa.php";
    require_once "./ControleRedeSocial2.php";

    class ContaRedeSocial{
        private string $nomeRedeSocial;
        private array $mensagens = [];
        private array $enviadores = [];

        public function __construct(string $nomeRedeSocial){
            $this->setNomeRedeSocial($nomeRedeSocial);
        }

        public function getNomeRedeSocial(): string{
            return $this->nomeRedeSocial;
        }

        public function setNomeRedeSocial(string $nomeRedeSocial): void{
            $this->nomeRedeSocial = $nomeRedeSocial;
        }

        public function getMensagens(): array{
            return $this->mensagens;
        }

        public function setMensagens(string $mensagem): void{
            array_push($this->mensagens, $mensagem);
        }

        public function getEnviadores(): array{
            return $this->enviadores;
        }

        public function setEnviadores(string $nome): void{
            array_push($this->enviadores, $nome);
        }
    }
?>
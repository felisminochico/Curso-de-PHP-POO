<?php 
    require_once './Pessoa.php';
    require_once "./ControleRedeSocial.php";

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

        public function setUsuarios(Pessoa $usuario): void{
            array_push($this->usuarios, $usuario);
        }

        public function novoUsuario(Pessoa $pessoa){
            $pessoa->setConta(new Usuario($pessoa->getNome(), $pessoa->getIdade(), $pessoa->getSexo()));
            $pessoa->getConta()->setRedeSocial($this);
            $this->setUsuarios($pessoa);
            echo("<p>Conta {$pessoa->getConta()->getNome()} criada com sucesso na Plataforma {$this->getNome()}!</p>");
        }
    }
?>
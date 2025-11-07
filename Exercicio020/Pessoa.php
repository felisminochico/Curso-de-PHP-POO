<?php 
    class Pessoa{
        private string $nome;
        private int $idade;
        private string $sexo;
        private bool $temConta;
        private Usuario $conta;
        
        public function __construct(string $nome, int $idade, string $sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setTemConta(false);
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

        public function getSexo(): string{
            return $this->sexo;
        }

        public function setSexo(string $sexo): void{
            $this->sexo = $sexo;
        }

        public function getTemConta(): bool{
            return $this->temConta;
        }

        public function setTemConta(bool $temConta): void{
            $this->temConta = $temConta;
        }

        public function getConta(): Usuario{
            return $this->conta;
        }

        public function setConta(Usuario $conta): void{
            $this->conta = $conta;
        }

        public function criarConta(RedeSocial $redeSocial){
            if($this->getTemConta() === true && $this->getConta()->getRedeSocial() === $redeSocial){
                echo ("<p><strong>ERRO:</strong> ". $this->getNome(). " já é um usuário da Plataforma {$this->getConta()->getRedeSocial()->getNome()}.</p>");
            }else{
                $redeSocial->novoUsuario($this);
                $this->setTemConta(true);
                $this->getConta()->setTemConta(true);
            }
        }
    }
?>
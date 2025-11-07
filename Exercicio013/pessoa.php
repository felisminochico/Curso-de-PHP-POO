<?php 
    require_once "./controle.php";

    abstract class Pessoa{
        protected string $nome;
        protected int $idade;
        protected string $sexo;
        protected bool $dentro;
        protected bool $acordado;
        protected bool $dono;
        protected bool $assistindo;
        protected bool $temCasa;

        public function __construct(string $nome, int $idade, string $sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setDentro(false);
            $this->setAcordado(true);
            $this->setAssistindo(false);
            $this->setTemCasa(false);
        }

        protected function getNome(): string{
            return $this->nome;
        }

        protected function setNome(string $nome): void{
            $this->nome = $nome;
        }

        protected function getIdade(): int{
            return $this->idade;
        }

        protected function setIdade(int $idade): void{
            $this->idade = $idade;
        }

        protected function getSexo(): string{
            return $this->sexo;
        }

        protected function setSexo(string $sexo): void{
            $this->sexo = $sexo;
        }

        protected function getDentro(): bool{
            return $this->dentro;
        }

        protected function setDentro(bool $dentro): void{
            $this->dentro = $dentro;
        }

        protected function getAcordado(): bool{
            return $this->acordado;
        }

        protected function setAcordado(bool $acordado): void{
            $this->acordado = $acordado;
        }

        protected function getDono(): bool{
            return $this->dono;
        }

        protected function setDono(bool $dono): void{
            $this->dono = $dono;
        }

        protected function getAssistindo(): bool{
            return $this->assistindo;
        }

        protected function setAssistindo(bool $assistindo): void{
            $this->assistindo = $assistindo;
        }

        public function getTemCasa(): bool{
            return $this->temCasa;
        }

        protected function setTemCasa(bool $temCasa): void{
            $this->temCasa = $temCasa;
        }

        abstract protected function detalhes();
    }
?>
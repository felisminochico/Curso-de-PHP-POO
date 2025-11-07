<?php
    abstract class Alimentos{
        protected string $nome;
        protected string $tipo;

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        protected function getTipo(): string{
            return $this->tipo;
        }

        protected function setTipo(string $tipo): void{
            $this->tipo = $tipo;
        }

        abstract public function apresentar();
    }
?>
<?php
require_once './Pessoa.php';

class Funcionario extends Pessoa{
    private string $setor;
    private bool $trabalhando;
    
    public function getSetor(): string {
        return $this->setor;
    }

    public function getTrabalhando(): bool {
        return $this->trabalhando;
    }

    public function setSetor(string $setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando(bool $trabalhando): void {
        $this->trabalhando = $trabalhando;
    }
    
    public function mudarTrabalho(){
        if($this->getTrabalhando()){
            $this->setTrabalhando(false);
            echo "<br>Deixando de Trabalhar...";
        }else{
            $this->setTrabalhando(true);
            echo "<br>Trabalhando...";
        }
    }
}

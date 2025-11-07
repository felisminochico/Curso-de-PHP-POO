<?php
require_once './Pessoa.php';

class Gafanhoto extends Pessoa{
    private string $login;
    private int $totalAssistido;
    
    public function __construct(string $nome, int $idade, string $sexo, string $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->setTotalAssistido(0);
    }

    
    public function getLogin(): string {
        return $this->login;
    }

    public function getTotalAssistido(): int {
        return $this->totalAssistido;
    }

    public function setLogin(string $login): void {
        $this->login = $login;
    }

    public function setTotalAssistido(int $totalAssistido): void {
        $this->totalAssistido = $totalAssistido;
    }

    public function viuMaisUm(){
        $this->setTotalAssistido($this->getTotalAssistido() + 1);
    }
}

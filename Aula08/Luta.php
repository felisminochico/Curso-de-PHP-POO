<?php
require_once 'Lutador.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private int $rounds;
    private $aprovada;
    
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
            echo "<br>Luta marcada com sucesso!";
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            echo "<p>Não aprovado</p>";
            $this->aprovada = null;
        }
    }
    
    public function lutar(){
        if($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            
            switch($vencedor){
                case 0:
                    echo "<p><strong>Empate</strong>!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p><strong>{$this->desafiado->getNome()}</strong> ganhou a Luta!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p><strong>{$this->desafiante->getNome()}</strong> ganhou a Luta!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }else{
            echo "<p>A Luta não pode acontecer...</p>";
        }
    }
    
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds(): int {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds(int $rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }


}

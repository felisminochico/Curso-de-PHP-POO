<?php
require_once "./Lutador.php";

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
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

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

    public function marcarLuta($l1, $l2){
        if(($l1->getCategoria() == $l2->getCategoria() && $l1->getSexo() == $l2->getSexo()) && ($l1 != $l2)){
            echo "<br>Luta marcada com sucesso!.";
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            $this->setAprovada(true);
        }else{
            echo "<br>{$l1->getNome()} e {$l2->getNome()} não podem lutar!";
            $this->setAprovada(false);
        }
    }
    
    public function lutar(){
        if($this->getAprovada() == true){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = random_int(0, 2);
            if($vencedor == 0){
                echo "<p><strong>Empate!</strong></p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
            }elseif($vencedor == 1){
                echo "<br><strong>{$this->desafiado->getNome()}</strong> Venceu!";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
            }elseif($vencedor == 2){
                echo "<br><strong>{$this->desafiante->getNome()}</strong> Venceu!";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
            }
        }else{
            echo "<p>A Luta nãao acontecerá.";
        }
    }
}

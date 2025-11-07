<?php 
    require_once "./Mundo.php";

    class Continente extends Mundo{

        #[\Override]
        public function detalhes(){
            echo "<p>Continente ". $this->getNome(). " <br>Espaço: ". number_format($this->getEspaco(), 2, ",", " "). "<br>Total de Pessoas: ". number_format($this->getTotalPessoas(), 2, ",", " "). "</p>";
        }
    }
?>
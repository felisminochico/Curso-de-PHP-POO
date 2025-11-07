<?php
require_once './Gafanhoto.php';
require_once './Video.php';

class Visualizacao {
    private Gafanhoto $espectador;
    private Video $filme;
    
    public function getEspectador(): Gafanhoto {
        return $this->espectador;
    }

    public function getFilme(): Video {
        return $this->filme;
    }

    public function setEspectador(Gafanhoto $espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme(Video $filme): void {
        $this->filme = $filme;
    }

    public function visualizar(Gafanhoto $gaf, Video $v){
        $this->espectador = $gaf;
        $this->filme = $v;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
        
        echo "<h3>Visualização</h3>";
        echo "<p>O Vídeo <strong>{$this->filme->getTitulo()}</strong> está sendo visualizado por ";
        echo "<strong>{$this->espectador->getNome()}</strong></p>";
    }
    
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    
    public function avaliarNota(int $nota){
        $this->filme->setAvaliacao($nota);
    }
    
    public function avaliarPorcentagem(int $porc){
        $nota = 0;
        if($porc <= 20){
            $nota = 3;
        }elseif($porc <= 50){
            $nota = 5;
        }elseif($porc <= 90){
            $nota = 8;
        }else{
            $nota = 10;
        }
        
        $this->filme->setAvaliacao($nota);
    }
}

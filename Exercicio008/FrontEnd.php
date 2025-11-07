<?php
require_once './Web.php';
require_once './Configuracoes.php';

class FrontEnd extends Web implements Configuracoes{
    
    #[\Override]
    public function configurarCategoria() {
        $this->setCategoria("Front-End");
        $this->setConfigurado($this->getConfigurado() + 1);
        echo "<p>Categoria {$this->getCategoria()} configurada com sucesso!</p>";
    }
    
    #[\Override]
    public function configurarLiguagens() {
        $this->linguagens[0] = "HTML";
        $this->linguagens[1] = "CSS";
        $this->linguagens[2] = "JavaScript";
        //$this->setLinguagens(array_push($this->linguagens, "HTML"));
        $this->setConfigurado($this->getConfigurado() + 1);
        echo "<p>Lingugens configuradas com sucesso!</p>";
    }
}

<?php
require_once './Web.php';
require_once './Configuracoes.php';

class FullStack extends Web implements Configuracoes{
    
   
    #[\Override]
    public function configurarCategoria() {
        $this->setCategoria("Full-Stack");
        $this->setConfigurado($this->getConfigurado() + 1);
        echo "<p>Categoria {$this->getCategoria()} configurada com suceso!</p>";
    }

    #[\Override]
    public function configurarLiguagens() {
        $this->linguagens[0] = "HTML";
        $this->linguagens[1] = "CSS";
        $this->linguagens[2] = "JavaScript";
        $this->linguagens[3] = "PHP";
        $this->linguagens[4] = "MySQL";
        $this->linguagens[5] = "Python";
        $this->setConfigurado($this->getConfigurado() + 1);
    }
}

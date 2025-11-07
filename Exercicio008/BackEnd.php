<?php
require_once './Web.php';
require_once './Configuracoes.php';

class BackEnd extends Web implements Configuracoes{
    
    #[\Override]
    public function configurarCategoria() {
        $this->setCategoria("Back-End");
        $this->setConfigurado($this->getConfigurado() + 1);
    }

    #[\Override]
    public function configurarLiguagens() {
        $this->linguagens[0] = "PHP";
        $this->linguagens[1] = "MySQL";
        $this->linguagens[2] = "Python";
        $this->setConfigurado($this->getConfigurado() + 1);
    }
}

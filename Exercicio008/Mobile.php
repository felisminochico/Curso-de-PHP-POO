<?php
require_once './Desenvolvedor.php';
require_once './Configuracoes.php';

class Mobile extends Desenvolvedor implements Configuracoes{
    
    public function configurarTipo(){
        $this->setTipo("Mobile");
        echo "<p>Tipo {$this->getTipo()} configurado com sucesso!</p>";
    }
    
    #[\Override]
    public function configurarCategoria() {
        $this->setCategoria("Músicas");
        $this->setConfigurado($this->getConfigurado() + 1);
    }

    #[\Override]
    public function configurarLiguagens() {
        $this->linguagens[0] = "Java";
        $this->linguagens[1] = "Kotlin";
        $this->setConfigurado($this->getConfigurado() + 1);
    }
}

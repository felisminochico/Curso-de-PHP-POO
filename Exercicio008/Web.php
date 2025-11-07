<?php
require_once './Desenvolvedor.php';

class Web extends Desenvolvedor{
    
    public function configurarTipo() {
        $this->setTipo("WEB");
        echo "<p>Tipo {$this->getTipo()} configurado com sucesso!</p>";
    }
}

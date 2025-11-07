<?php
require_once './Mamifero.php';

class Canguru extends Mamifero{
    
    public function usarBolsa(){
        echo "<p>Usando Bolsa...</p>";
    }
    
    #[\Override]
    public function locomover() {
        echo "<p>Saltando...</p>";
    }
}

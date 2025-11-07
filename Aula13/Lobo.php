<?php
require_once './Mamifero.php';

class Lobo extends Mamifero{
    
    #[\Override]
    public function emitirSom() {
        echo "<p>Auuuuuuuuuu!</p>";
    }
}

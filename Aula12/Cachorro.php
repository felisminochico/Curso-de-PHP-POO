<?php
require_once './Mamifero.php';

class Cachorro extends Mamifero{
    
    public function enterrarOsso(){
        echo "<p>Enterrando o Osso...</p>";
    }
    
    public function abanarRabo(){
        echo "<p>Abanando o Rabo...</p>";
    }
}

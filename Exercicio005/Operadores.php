<?php
require_once './Tabuada.php';

class Operadores {
    private Tabuada $res;
    
    public function __construct(Tabuada $res){
        $this->res = $res;
    }
    
    public function somar(): void{
        $this->res->setResolvida(true);
        $this->res->setOperador("Soma");
        echo "<br>Tabuada Somada com Sucesso!<br>";
    }
}

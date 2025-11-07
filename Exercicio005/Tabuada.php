<?php
class Tabuada {
    private int $numero_tabuada;
    private int $inicio;
    private int $fim;
    private bool $resolvida;
    private string $operador;
    
    public function __construct(int $num, int $ini, int $fi){
        $this->setNumeroTabuada($num);
        $this->setInicio($ini);
        $this->setFim($fi);
        $this->setResolvida(false);
    }
    
    public function getNumeroTabuada(): int {
        return $this->numero_tabuada;
    }

    public function getInicio(): int {
        return $this->inicio;
    }

    public function getFim(): int {
        return $this->fim;
    }
    
    public function getResolvida(): bool {
        return $this->resolvida;
    }
    
    public function getOperador(): string{
        return $this->operador;
    }

    public function setNumeroTabuada(int $numero_tabuada): void {
        $this->numero_tabuada = $numero_tabuada;
    }

    public function setInicio(int $inicio): void {
        $this->inicio = $inicio;
    }

    public function setFim(int $fim): void {
        $this->fim = $fim;
    }
    
    public function setResolvida(bool $resolvida){
        $this->resolvida = $resolvida;
    }
    
    public function setOperador(string $operador): void{
        $this->operador = $operador;
    }

    public function verTabuada(){
        if($this->getResolvida()){
            if($this->getOperador() == "Soma"){
                for($c = $this->getInicio(); $c <= $this->getFim(); $c++){
                    echo "<p> {$this->getNumeroTabuada()} + $c = ". ($this->getNumeroTabuada() + $c). "</p>";
                }
            }
        }else{
            echo "<br>Tabuada não resolvida.<br>";
        }
    }
    
    public function status(){
        if($this->getResolvida()){
            echo "<br>STATUS: TABUADA RESOLVIDA!";
        }else{
            echo "<br>STATUS: TABUADA NÃO RESOLVIDA!";
        }
        echo "<br>Número da Tabuada: {$this->getNumeroTabuada()}";
        echo "<br>Início da Tabuada: ". $this->getInicio();
        echo "<br>Fim da Tabauada: {$this->getFim()}";
    }
}

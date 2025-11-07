<?php
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if($this->tampada === true){
            echo "<p>ERRO: Impossível rabiscar com a Caneta Tampada. DESTAMPE!</p>";
        }else{
            echo "<p>Estou Rabiscando...</p>";
        }
    }
    
    public function tampar(){
        $this->tampada = true;
        echo "<p>A Caneta foi tampada com êxito.";
    }
    
    public function destampar(){
        $this->tampada = false;
        echo "<p>A Caneta foi destampada com êxito";
    }
}

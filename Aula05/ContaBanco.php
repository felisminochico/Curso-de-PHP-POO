<?php
class ContaBanco {
    public  int $numConta;
    protected string $tipoConta;
    private string $dono;
    private float $saldo;
    private bool $status;
    
    public function __construct(int $numConta, string $tipoConta, string $dono){
        $this->numConta = $numConta;
        $this->dono = $dono;
        $this->tipoConta = $tipoConta;
        if($this->tipoConta ===  "CC"){
            $this->saldo = 50;
        }else if($this->tipoConta === "CP"){
            $this->saldo = 150;
        }
        $this->status = false;
    }
    
    public function abrirConta(){
        $this->status = true;
    }
    
    public function fecharConta(){
        #$this->status = false;
        if($this->getSaldo() > 0){
            echo "<p><strong>AVISO:</strong> RETIRE O DINHEIRO NA SUA CONTA, {$this->getDono()}.</p>";
        }else if($this->getSaldo() < 0){
            echo "<p><strong>ATENÇÂO: </strong> PAGUE A SUA DÌVIDA ANTES DE FECHAR A SUA CONTA.</p>";
        }
    }
    
    public function depositar(float $saldo){
        if($this->status === true){
            $this->saldo = $this->saldo + $saldo;
            $this->setSaldo($this->saldo);
        }else{
            echo "<p><strong>ERRO AO DEPOSITAR:</strong> A CONTA ESTÀ FECHADA.</p>";
        }
    }
    
    public function sacar(float $saldo){
        if($this->status === true && $saldo <= $this->saldo){
            $this->saldo = $this->saldo - $saldo;
            $this->setSaldo($this->saldo);
        }else if($this->status === true && $saldo > $this->saldo){
            echo "<p><strong>ERRO AO SACAR:</strong> O SALDO DA SUA CONTA NÃO É SUFICIENTE.</p>";
        }else if($this->status === false){
            echo "<p><strong>ERRO AO SACAR:</strong> A CONTA ESTÁ FECHADA.</p>";
        }
    }
    
    public function pagarMensal(){
        if($this->tipoConta === "CC"){
            $this->saldo = $this->saldo - 12;
            $this->setSaldo($this->saldo);
        }else if($this->tipoConta === "CP"){
            $this->saldo = $this->saldo - 20;
            $this->setSaldo($this->saldo);
        }
    }
    
    public function getNumConta(){
        return $this->numConta;
    }
    
    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    
    public function getTipoConta(){
        return $this->tipoConta;
    }
    
    public function setTipoConta($tipoConta){
        $this->tipoConta = $tipoConta;
    }
    
    public function getDono(){
        return $this->dono;
    }
    
    public function setDono($dono){
        $this->dono = $dono;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }
    
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function setStatus($status){
        $this->status = $status;
    }
    
    public function apresentacao(){
        echo "<p>Olá, eu sou <strong>{$this->getDono()}!</strong> O Status da minha Conta é {$this->getStatus()}, tenho {$this->getSaldo()} Kzs e a minha Conta é do Tipo {$this->getTipoConta()}.</p>";
    }
}
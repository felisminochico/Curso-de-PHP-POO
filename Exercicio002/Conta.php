<?php
class Conta {
    private $saldo;
    private $nome_conta;
    private $senha;
    private $numero_conta;
    private $iban;
    
    public function __construct($saldo, $nome_conta, $senha, $numero_conta, $iban){
        $this->saldo = $saldo;
        $this->nome_conta = $nome_conta;
        $this->senha = $senha;
        $this->numero_conta = $numero_conta;
        $this->iban = $iban;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }
    
    public function setDepositarSaldo($saldo){
        $this->saldo = $this->saldo + $saldo;
    }
    
    public function setRetirarSaldo($saldo){
        if($saldo > $this->saldo){
            echo "<p>ERRO: O Saldo da sua Conta é inferior ao pedido do levantamento. Saldo atual: {$this->getSaldo()}</p>";
        }else{
            $this->saldo = $this->saldo - $saldo;
        }
    }
    
    public function getNomeConta(){
        return $this->nome_conta;
    }
    
    public function setNomeConta($nome_conta){
        $this->nome_conta = $nome_conta;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($senha_antiga, $senha_nova){
        if($senha_antiga === $this->senha){
            echo "<p>Senha alterada.</p>";
            $this->senha = $senha_nova;
        }else{
            echo "<p>ERRO: A senha atual está incorrecta.</p>";
        }
    }
    
    public function getNumeroConta(){
        return $this->numero_conta;
    }
    
    public function getIban(){
        return $this->iban;
    }
}

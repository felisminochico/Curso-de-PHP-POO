<?php

abstract class Animal {
    protected float $peso;
    protected int $idade;
    protected int $membros;
    
    abstract protected function emitirSom();
}

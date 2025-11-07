<?php 
    interface ControleLoja{
        public function comprarProduto(int $id, int $quant, Loja $loja);
    }
?>
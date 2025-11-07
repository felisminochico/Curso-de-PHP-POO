<?php 
    interface Sistema{
        public function cadastrar(Aluno $aluno);
        public function consultar();
        public function atualizar(Aluno $aluno, string $novoNome, int $novaIdade);
        public function remover(int $id);
    }
?>
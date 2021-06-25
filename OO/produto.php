<?php

    class Produto{

        public $nome;
        public $descricao;
        public $valor;
        public $estoque;
        /*
    public function __construct($nome, $descricao, $valor, $estoque){

        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->estoque = $estoque;
        
    }*/

    public function baixaEstoque(){
        $this->estoque = $this->estoque - 1;
    }


    }
<?php
    class Product {

        // Props:
        public $id_prod;
        public $nome_prod;
        public $setor_prod;
        public $custo_prod;
        public $venda_prod;
        public $estoque_prod;
        public $situacao_prod;

        // Constructor:
        function __construct(
            $nome_prod,
            $setor_prod,
            $custo_prod,
            $venda_prod,
            $estoque_prod,
            $situacao_prod
        ){
            $this->nome_prod;
            $this->setor_prod;
            $this->custo_prod;
            $this->venda_prod;
            $this->estoque_prod;
            $this->situacao_prod;
        }

        // Setters & Getters:

        // public function save(){}
        // public function update(){}
        // public function remove(){}
        // public function getAll(){}

    }
?>
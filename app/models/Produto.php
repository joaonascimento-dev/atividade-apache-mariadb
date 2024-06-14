<?php
    class Produto {
        private $id;
        private $marca;
        private $tipo;
        private $precoCusto;
        private $precoVenda;
        private $tamanho;
        private $corPredominante;
        private $genero;
        private $situacao;
        private $observacoes;

        public function __construct($id, $marca, $tipo, $precoCusto, $precoVenda, $tamanho, $corPredominante, $genero, $situacao, $observacoes) {
            $this->id = $id;
            $this->marca = $marca;
            $this->tipo = $tipo;
            $this->precoCusto = $precoCusto;
            $this->precoVenda = $precoVenda;
            $this->tamanho = $tamanho;
            $this->corPredominante = $corPredominante;
            $this->genero = $genero;
            $this->situacao = $situacao;
            $this->observacoes = $observacoes;
        }

        public function getId() {
            return $this->id;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getPrecoCusto() {
            return $this->precoCusto;
        }

        public function getPrecoVenda() {
            return $this->precoVenda;
        }

        public function getTamanho() {
            return $this->tamanho;
        }

        public function getCorPredominante() {
            return $this->corPredominante;
        }

        public function getGenero() {
            return $this->genero;
        }

        public function getSituacao() {
            return $this->situacao;
        }

        public function getObservacoes() {
            return $this->observacoes;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function setPrecoCusto($precoCusto) {
            $this->precoCusto = $precoCusto;
        }

        public function setPrecoVenda($precoVenda) {
            $this->precoVenda = $precoVenda;
        }

        public function setTamanho($tamanho) {
            $this->tamanho = $tamanho;
        }

        public function setCorPredominante($corPredominante) {
            $this->corPredominante = $corPredominante;
        }

        public function setGenero($genero) {
            $this->genero = $genero;
        }

        public function setSituacao($situacao) {
            $this->situacao = $situacao;
        }

        public function setObservacoes($observacoes) {
            $this->observacoes = $observacoes;
        }
    }
?>

<?php

    class Cliente {
        private $id;
        private $nome;
        private $cpf;
        private $rg;
        private $telefone;
        private $endereco;
        private $email;
        private $situacao;

        public function __construct($id, $nome, $cpf, $rg, $telefone, $endereco, $email, $situacao) {
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->rg = $rg;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->situacao = $situacao;
        }

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function getRg() {
            return $this->rg;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getSituacao() {
            return $this->situacao;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function setRg($rg) {
            $this->rg = $rg;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setSituacao($situacao) {
            $this->situacao = $situacao;
        }
    }

?>

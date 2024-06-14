<?php
    require_once 'Cliente.php';
    require_once 'Produto.php';

    class CarrinhoCompra {
        private $cliente;
        private $produtos;

        public function __construct(Cliente $cliente) {
            $this->cliente = $cliente;
            $this->produtos = [];
        }

        public function adicionarProduto(Produto $produto) {
            $this->produtos[] = $produto;
        }

        public function removerProduto(Produto $produto) {
            $index = array_search($produto, $this->produtos);
            if ($index !== false) {
                unset($this->produtos[$index]);
            }
        }

        public function calcularTotal() {
            $total = 0;
            foreach ($this->produtos as $produto) {
                $total += $produto->getPrecoVenda();
            }
            return $total;
        }

        public function getProdutos() {
            return $this->produtos;
        }

        public function getCliente() {
            return $this->cliente;
        }
    }
?>

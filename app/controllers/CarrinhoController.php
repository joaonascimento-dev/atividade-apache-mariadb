<?php
    require_once 'CarrinhoModel.php';
    require_once 'CarrinhoDAO.php';

    class CarrinhoController {

        private $carrinhoModel;
        private $carrinhoDAO;

        public function __construct(CarrinhoModel $carrinhoModel, CarrinhoDAO $carrinhoDAO) {
            $this->carrinhoModel = $carrinhoModel;
            $this->carrinhoDAO = $carrinhoDAO;
        }

        public function adicionarProdutoAoCarrinho(Produto $produto) {
            $this->carrinhoModel->adicionarProduto($produto);
        }

        public function removerProdutoDoCarrinho(Produto $produto) {
            $this->carrinhoModel->removerProduto($produto);
        }

        public function calcularTotalDoCarrinho() {
            return $this->carrinhoModel->calcularTotal();
        }

        public function finalizarCompra() {
            $this->carrinhoDAO->salvarCompraNoBanco($this->carrinhoModel);
        }
    }
?>

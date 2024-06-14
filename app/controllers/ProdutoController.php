<?php
    require_once 'Produto.php';
    require_once 'ProdutoDAO.php';
    require_once 'Connection.php';

    class ProdutoController {

        public function salvarProduto($marca, $tipo, $precoCusto, $precoVenda, $tamanho, $corPredominante, $genero, $situacao, $observacoes) {
            $produto = new Produto(null, $marca, $tipo, $precoCusto, $precoVenda, $tamanho, $corPredominante, $genero, $situacao, $observacoes);
            $produtoDAO = new ProdutoDAO();
            $produtoDAO->inserir($produto);
        }

        public function alterarProduto($id, $marca, $tipo, $precoCusto, $precoVenda, $tamanho, $corPredominante, $genero, $situacao, $observacoes) {
            $produto = new Produto($id, $marca, $tipo, $precoCusto, $precoVenda, $tamanho, $corPredominante, $genero, $situacao, $observacoes);
            $produtoDAO = new ProdutoDAO();
            $produtoDAO->atualizar($produto);
        }

        public function deletarProduto($id) {
            $produtoDAO = new ProdutoDAO();
            $produtoDAO->deletar($id);
        }

        public function consultarProduto($id) {
            $produtoDAO = new ProdutoDAO();
            $produto = $produtoDAO->consultar($id);
            return $produto;
        }
    }
?>

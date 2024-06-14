<?php
    require_once 'CarrinhoModel.php';
    require_once 'Conexao.php';

    class CarrinhoDAO {

        private $conexaoBanco;

        public function __construct(ConexaoBanco $conexaoBanco) {
            $this->conexaoBanco = $conexaoBanco;
        }

        public function salvarCompraNoBanco(CarrinhoModel $carrinhoModel) {

            $this->conexaoBanco->beginTransaction();

            try {
                $query = "INSERT INTO carrinho (cliente_id, total) VALUES (?, ?)";
                $stmt = $this->conexaoBanco->prepare($query);
                $stmt->execute([$carrinhoModel->getCliente()->getId(), $carrinhoModel->calcularTotal()]);
                $carrinhoId = $this->conexaoBanco->lastInsertId();

                foreach ($carrinhoModel->getProdutos() as $produto) {
                    $query = "INSERT INTO carrinho_produto (carrinho_id, produto_id) VALUES (?, ?)";
                    $stmt = $this->conexaoBanco->prepare($query);
                    $stmt->execute([$carrinhoId, $produto->getId()]);
                }
                $this->conexaoBanco->commit();
                $carrinhoModel->removerProdutos();

                echo "Compra finalizada com sucesso!";
            } catch (Exception $e) {
                $this->conexaoBanco->rollBack();

                echo "Erro ao finalizar a compra: " . $e->getMessage();
            }
        }
    }
?>

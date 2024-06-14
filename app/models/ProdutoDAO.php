<?php
    require_once 'Produto.php';

    class ProdutoDAO {
        private $conexao;

        public function __construct(PDO $conexao) {
            $this->conexao = $conexao;
        }

        public function inserir(Produto $produto) {
            $sql = "INSERT INTO produtos (marca, tipo, preco_custo, preco_venda, tamanho, cor_predominante, genero, situacao, observacoes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$produto->getMarca(), $produto->getTipo(), $produto->getPrecoCusto(), $produto->getPrecoVenda(), $produto->getTamanho(), $produto->getCorPredominante(), $produto->getGenero(), $produto->getSituacao(), $produto->getObservacoes()]);
        }

        public function atualizar(Produto $produto) {
            $sql = "UPDATE produtos SET marca=?, tipo=?, preco_custo=?, preco_venda=?, tamanho=?, cor_predominante=?, genero=?, situacao=?, observacoes=? WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$produto->getMarca(), $produto->getTipo(), $produto->getPrecoCusto(), $produto->getPrecoVenda(), $produto->getTamanho(), $produto->getCorPredominante(), $produto->getGenero(), $produto->getSituacao(), $produto->getObservacoes(), $produto->getId()]);
        }

        public function deletar($id) {
            $sql = "DELETE FROM produtos WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$id]);
        }

        public function consultar($id) {
            $sql = "SELECT * FROM produtos WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$id]);
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$resultado) {
                return null;
            }
            return new Produto(
                $resultado['id'],
                $resultado['marca'],
                $resultado['tipo'],
                $resultado['preco_custo'],
                $resultado['preco_venda'],
                $resultado['tamanho'],
                $resultado['cor_predominante'],
                $resultado['genero'],
                $resultado['situacao'],
                $resultado['observacoes']
            );
        }
    }
?>

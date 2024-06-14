<?php
    require_once 'Cliente.php';

    class ClienteDAO {

        private $conexao;

        public function __construct(PDO $conexao) {
            $this->conexao = $conexao;
        }

        public function inserir(Cliente $cliente) {
            $sql = "INSERT INTO clientes (nome, cpf, rg, telefone, endereco, email, situacao) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$cliente->getNome(), $cliente->getCpf(), $cliente->getRg(), $cliente->getTelefone(), $cliente->getEndereco(), $cliente->getEmail(), $cliente->getSituacao()]);
        }

        public function atualizar(Cliente $cliente) {
            $sql = "UPDATE clientes SET nome=?, cpf=?, rg=?, telefone=?, endereco=?, email=?, situacao=? WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$cliente->getNome(), $cliente->getCpf(), $cliente->getRg(), $cliente->getTelefone(), $cliente->getEndereco(), $cliente->getEmail(), $cliente->getSituacao(), $cliente->getId()]);
        }

        public function deletar($id) {
            $sql = "DELETE FROM clientes WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$id]);
        }

        public function consultar($id) {
            $sql = "SELECT * FROM clientes WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$id]);
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$resultado) {
                return null;
            }

            return new Cliente(
                $resultado['id'],
                $resultado['nome'],
                $resultado['cpf'],
                $resultado['rg'],
                $resultado['telefone'],
                $resultado['endereco'],
                $resultado['email'],
                $resultado['situacao']
            );
        }
    }
?>

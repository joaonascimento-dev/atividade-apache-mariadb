<?php
    require_once 'Cliente.php';
    require_once 'ClienteDAO.php';
    require_once 'Connection.php';
    class ClienteController {

        public function salvarCliente($nome, $cpf, $rg, $telefone, $endereco, $email, $situacao) {
            $cliente = new Cliente(null, $nome, $cpf, $rg, $telefone, $endereco, $email, $situacao);
            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserir($cliente);
        }

        public function alterarCliente($id, $nome, $cpf, $rg, $telefone, $endereco, $email, $situacao) {
            $cliente = new Cliente($id, $nome, $cpf, $rg, $telefone, $endereco, $email, $situacao);

            $clienteDAO = new ClienteDAO();
            $clienteDAO->atualizar($cliente);
        }

        public function deletarCliente($id) {

            $clienteDAO = new ClienteDAO();
            $clienteDAO->deletar($id);
        }

        public function consultarCliente($id) {

            $clienteDAO = new ClienteDAO();
            $cliente = $clienteDAO->consultar($id);
            return $cliente;
        }
    }
?>

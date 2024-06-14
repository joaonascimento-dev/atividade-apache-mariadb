<?php
    require_once 'Usuario.php';
    require_once 'UsuarioDAO.php';
    require_once 'Connection.php';
    class UsuarioController {

        public function salvarUsuario($nome, $email, $senha, $nivelAcesso) {
            $usuario = new Usuario(null, $nome, $email, $senha, $nivelAcesso);
            $usuarioDAO = new UsuarioDAO();
            $usuarioDAO->inserir($usuario);
        }

        public function alterarUsuario($id, $nome, $email, $senha, $nivelAcesso) {
            $usuario = new Usuario($id, $nome, $email, $senha, $nivelAcesso);
            $usuarioDAO = new UsuarioDAO();
            $usuarioDAO->atualizar($usuario);
        }

        public function deletarUsuario($id) {
            $usuarioDAO = new UsuarioDAO();
            $usuarioDAO->deletar($id);
        }

        public function consultarUsuario($id) {
            $usuarioDAO = new UsuarioDAO();
            $usuario = $usuarioDAO->consultar($id);
            return $usuario;
        }
    }
?>

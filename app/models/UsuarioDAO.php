<?php
    require_once 'Usuario.php';

    class UsuarioDAO {

        private $conexao;

        public function __construct(PDO $conexao) {
            $this->conexao = $conexao;
        }

        public function inserir(Usuario $usuario) {
            $sql = "INSERT INTO usuarios (nome, email, senha, nivel_acesso) VALUES (?, ?, ?, ?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$usuario->getNome(), $usuario->getEmail(), $usuario->getSenha(), $usuario->getNivelAcesso()]);
        }

        public function atualizar(Usuario $usuario) {
            $sql = "UPDATE usuarios SET nome=?, email=?, senha=?, nivel_acesso=? WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$usuario->getNome(), $usuario->getEmail(), $usuario->getSenha(), $usuario->getNivelAcesso(), $usuario->getId()]);
        }

        public function deletar($id) {
            $sql = "DELETE FROM usuarios WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$id]);
        }

        public function consultar($id) {
            $sql = "SELECT * FROM usuarios WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$id]);
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$resultado) {
                return null;
            }

            return new Usuario(
                $resultado['id'],
                $resultado['nome'],
                $resultado['email'],
                $resultado['senha'],
                $resultado['nivel_acesso']
            );
        }
        public function getUserByUseremail($email) {

            $query = "SELECT * FROM usuario WHERE email = :email";
            $params = [':email' => $email];
    
            return $this->conexao->selectOne($query, $params);
        }
    }
?>
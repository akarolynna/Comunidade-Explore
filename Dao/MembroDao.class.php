<?php
require_once 'PDOConnection.class.php';
class MembroDao
{
    private $connection;
    public  function __construct()
    {
        $this->connection = new PDOConnection();
    }

    private function getResult($query, $fields)
    {
        $this->connection->connection();
        $stm = $this->connection->prepareStatement($query, $fields);
        return $this->connection->executeStatement($stm);
    }

    public function buscarMembros()
    {
        $query = "SELECT * FROM Membro";
        $fields = [];
        $result = [];
        try {
            $result = $this->getResult($query, $fields);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }

    public function buscarMembroPorId($membroId) {
        $query = 'SELECT * FROM Membro WHERE membro.id = :membroId';
        $fields = array('membroId' => $membroId);
        $result = [];
        
        try {
            $result = $this->getResult($query, $fields);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }

    public function criarMembro(MembroModel $usuario)
    {
        $options = [
            'foto' => $usuario->getFoto(),
            'email' => $usuario->getEmail(),
            'senha' => password_hash($usuario->getSenha(), PASSWORD_DEFAULT)
        ];
        $query = "INSERT INTO membro (foto, email, senha) VALUES (:foto, :email, :senha);";

        try {
            $this->connection->connection();
            $statement = $this->connection->prepareStatement($query, $options);
            return $this->connection->executeStatement($statement);
        } catch (Exception $ex) {
            throw new Exception("Erro ao tentar adicionar usuário no Banco de Dados <br>" . $ex->getMessage());
        }
    }

    public function autenticandoMembro($email, $senha)
    {
        $options = [
            'email' => $email,
        ];

        $query = 'SELECT * FROM membro WHERE email = :email;';

        try {
            $this->connection->connection();
            $statement = $this->connection->prepareStatement($query, $options);
            $resultados = $this->connection->executeStatement($statement);
            if (count($resultados) > 0) {
                $usuarioDoBanco = $resultados[0];

                // Verifique a senha usando password_verify
                if (password_verify($senha, $usuarioDoBanco['senha'])) {
                    echo 'Autenticado';
                    return true; // Senha válida, autenticação bem-sucedida
                } else {
                    echo 'Senha inválida';
                    return false; // Senha inválida

                }
            } else {
                return false; // Usuário não encontrado
            }
        } catch (Exception $ex) {
            throw new Exception("Erro ao comparar informações no banco de dados: " . $ex->getMessage());
        }
    }

    public function consultarDadosMembro($email)
    {
        $options = [
            'email' => $email,
        ];

        $query = 'SELECT * FROM membro WHERE email = :email;';

        try {
            $this->connection->connection();
            $statement = $this->connection->prepareStatement($query, $options);
            $resultados = $this->connection->executeStatement($statement);
            if (count($resultados) > 0) {
                $usuarioDoBanco = $resultados[0];
                return $usuarioDoBanco;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo 'Erro ao consultar dados do membro: ' . $ex->getMessage() . '<br>';
            return false;
        }
    }
    public function atualizarMembro(MembroModel $membro) {
        $query = "UPDATE membro SET foto = :foto, apresentacao = :apresentacao, aniversario = :aniversario, telefone = :telefone, melhor_viagem = :melhorViagem WHERE email = :email";
        $options = [
            'foto' => $membro->getFoto(),
            'apresentacao' => $membro->getApresentacao(),
            'aniversario' => $membro->getAniversario(),
            'telefone' => $membro->getTelefone(),
            'melhorViagem' => $membro->getMelhorViagem(),
            'email' => $membro->getEmail(),
        ];
    
        try {
            $this->connection->connection();
            $statement = $this->connection->prepareStatement($query, $options);
            return $this->connection->executeStatement($statement);
        } catch (Exception $ex) {
            throw new Exception("Erro ao tentar atualizar usuário no Banco de Dados: " . $ex->getMessage());
        }
    }
    
}

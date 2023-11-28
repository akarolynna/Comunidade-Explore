<?php
require_once '../Dao/PDOConnection.class.php';

class MembroDao
{
    private $connection;

    // Nosso construtor inicializa a conexão com nosso banco de dados
    function __construct()
    {
        $this->connection = new PDOConnection();
    }

    private function getResult($query, $options)
    {
        // Estamos garantindo
        $this->connection->connection();
        $statement = $this->connection->prepareStatement($query, $options);
        return $this->connection->executeStatement($statement);
    }

    public function cadastroMembro($membro)
    {
        $query = "INSERT INTO membro(foto, email, senha) VALUES (:foto, :email, :senha)";
        $option = [
            'foto' => $membro->getFoto(),
            'email' => $membro->getEmail(),
            'senha' => $membro->getSenha(),
        ];
        try {
            $result = $this->getResult($query, $option);
            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
?>

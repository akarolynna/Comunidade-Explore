<?php
   require_once 'PDOConnection.class.php';
   class MembroDao{
    private $connection;
    public  function __construct(){
        $this->connection = new PDOConnection();
    }

    public function criarMembro(MembroModel $usuario){
        $options = [
            'foto' => $usuario->getFoto(),
            'email' => $usuario->getEmail(),
            'senha' => $usuario->getSenha(),
        ];
        $query = "INSERT INTO membro (foto, email, senha) VALUES (:foto, :email, :senha);";
         
      try {
        $this->connection->connection();
        $statement = $this->connection->prepareStatement($query, $options);
        return $this->connection->executeStatement($statement);
       

      } catch (Exception $ex) {
        throw new Exception("Erro ao tentar adicionar usuário no Banco de Dados" .$ex->getMessage());
      }
    }


   }
?>
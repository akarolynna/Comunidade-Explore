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
            'senha' => password_hash($usuario->getSenha(), PASSWORD_DEFAULT)
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

    public function autenticandoMembro( $email, $senha){
      $options = [
          'email' => $email,
          // 'senha' => $senha
      ];
  
      $query = 'SELECT * FROM membro WHERE email = :email;';

      try {
          $this->connection->connection();
          $statement = $this->connection->prepareStatement($query, $options);
          $resultados= $this->connection->executeStatement($statement);
          if (count($resultados) > 0) {
            $usuarioDoBanco = $resultados[0];
        
            // Verifique a senha usando password_verify
            if (password_verify($senha, $usuarioDoBanco['senha'])) {
              echo 'Autenticado bichaaa';
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

   }
?>
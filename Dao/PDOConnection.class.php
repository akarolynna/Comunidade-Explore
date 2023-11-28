<?php
require_once '../Config/DBConfig.class.php';
class PDOConnection
{
    private $connection;

    public function connection()
    {
        try {
            // Configurando os parâmetros nnecessários para estabelecer uma conexão com o banco de dados
            $this->connection =  new PDO("mysql:host=" . DBConfig::$HOST . ";dbname=" . DBConfig::$DB, DBConfig::$USER, DBConfig::$PWD);
            //echo 'conectei'; //Teste para ver se funcionava
        } catch (Exception $ex) {
            throw new Exception(" Erro de execução!" . $ex->getMessage());
        }
    }
    /*
    No PDO o 'prepare' ele aceita uma:
    string -> que é a consulta SQL que desejamos preparar;
    array -> que é opicional e pode conter informações adicionais para a preparação da consulta
    */
    public function prepareStatement($query, $options){
        //Estamos preparando uma consulta segura ao BD evitando problemas de Injeções de SQL. 
        $statement = $this->connection->prepare($query);
        foreach ($options as $key => $value) {
            $statement->bindParam(":".$key, $value);
           
        }
        return $statement; 
    }

    /*
    Este carinha vai ser responsável por efetivar a consulta SQL preparada a cima, executando-a no banco de dados
    Quando trabalhamos com PDO:prepare que a função acima faz veremos que ele prepara uma instrução SQL para ser executada pelo método que desenvolveremos abaixo, por isso ele é importante!!
    */

    //Ele está recebendo o $statement que é o objeto que já foi preparado e será utilizado para executarStatement
    public function executeStatement($statement){
        //Como as instruções de SELECT são diferentes das de INSERT, UPDATE, DELETE nós faremos um tratamento especial para elas
        $isSelect = str_starts_with($statement->queryString, "SELECT");  
        $statement->execute();     
        $arr = $statement->fetchAll(PDO::FETCH_ASSOC);
        $numRows = $statement->rowCount();
        $statement = null;    

        if (!$isSelect) {
            return $numRows;
        }

        return $arr; 
    }





    //Fim da nossa
}

/*Testando para ver se minha conexão funcionava  
Criando uma instância da classe PDOConnection*/
 //$pdoConnection = new PDOConnection();

// Chamando o método conexao
//$pdoConnection->connection(); 

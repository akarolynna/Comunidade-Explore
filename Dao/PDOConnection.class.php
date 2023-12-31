<?php
require_once '../Config/DBConfig.class.php';
class PDOConnection
{
    private $connection;

    public function connection()
    {
        try {
            $this->connection =  new PDO("mysql:host=" . DBConfig::$HOST . ";dbname=" . DBConfig::$DB, DBConfig::$USER, DBConfig::$PWD);
               //echo 'conectei'; //Teste para ver se funcionava
        } catch (Exception $ex) {
            throw new Exception(" Erro de execução!" . $ex->getMessage());
        }
    }
   
/*
Nosso erro estava pq não passamos o & na frente do $value.
Quando usamos & antes da variável ($value), você está passando a referência da variável, o que permite que o valor seja alterado mesmo após a vinculação. 

*/
    
    public function prepareStatement($query, $options){
        $statement = $this->connection->prepare($query);
        foreach ($options as $key => &$value) {
            $statement->bindParam(":$key", $value);
        }
        return $statement; 
    }
    
    // Executa uma instrução preparada
       public function executeStatement($statement){
        $isSelect = str_starts_with(strtolower($statement->queryString), "select");  
        $statement->execute();            
            $arr = $statement->fetchAll(PDO::FETCH_ASSOC);
            $numRows = $statement->rowCount();
            $statement = null;            
            if (!$isSelect)
                return $numRows;

            return $arr;            
        }
    }
       
?>
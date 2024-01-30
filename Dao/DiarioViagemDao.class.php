<?php
require_once '../Dao/PDOConnection.class.php';
class DiarioViagemDao{
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
}
?>
<?php

    require_once "../Dao/PDOConnection.class.php";

    class DiarioViagemDao {
        private $connection;

        public function __construct() {
            $this->connection = new PDOConnection();
        }

        private function getResult($query, $fields) {
            $this->connection->connection();
            $stm = $this->connection->prepareStm($query, $fields);
            return $this->connection->executeQuery($stm);
        }

        public function buscarDiariosViagem() {
            $query = "SELECT * FROM DiarioViagem";
            $result = [];
            try {
                $result = $this->getResult($query);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result;
        }
    }
?>
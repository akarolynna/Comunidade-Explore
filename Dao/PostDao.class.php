<?php

    require_once "../Dao/PDOConnection.class.php";

    class PostDao {
        private $connection;

        public function __construct() {
            $this->connection = new PDOConnection();
        }

        private function getResult($query, $fields) {
            $this->connection->connection();
            $stm = $this->connection->prepareStatement($query, $fields);
            return $this->connection->executeStatement($stm);
        }

        public function buscarPosts() {
            $query = "SELECT * FROM Post";
            $result = [];
            try {
                $result = $this->getResult($query, []);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result;
        }
    }
?>
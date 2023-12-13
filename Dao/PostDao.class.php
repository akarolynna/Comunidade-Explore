<?php

    require_once "../Dao/PDOConnection.class.php";
    require_once "../Model/Categoria.enum.php";

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

        public function buscarPosts($categoria) {
            if($categoria == strtolower(Categoria::TODOS)) {
                $query = "SELECT * FROM Post";
                $fields = array();
            } else {
                $query = "SELECT * FROM Post
                    INNER JOIN DiarioViagem ON Post.diario_id = DiarioViagem.id
                    INNER JOIN Categoria ON DiarioViagem.categoria_id = Categoria.id
                    WHERE Categoria.categoria = :numCategoria;";
                $fields = array('numCategoria' => $categoria);
            }

            $result = [];
            try {
                $result = $this->getResult($query, $fields);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result;
        }
    }
?>
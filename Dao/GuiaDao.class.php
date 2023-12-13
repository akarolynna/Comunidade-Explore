<?php

    require_once "../Dao/PDOConnection.class.php";
    require_once "../Model/Categoria.enum.php";

    class GuiaDao {
        private $connection;

        public function __construct() {
            $this->connection = new PDOConnection();
        }

        private function getResult($query, $fields) {
            $this->connection->connection();
            $stm = $this->connection->prepareStatement($query, $fields);
            return $this->connection->executeStatement($stm);
        }

        public function buscar($categoria, $pesquisa) {
            if($categoria == strtolower(Categoria::TODOS)) {
                $query = "SELECT * FROM Guia WHERE Guia.nomeDestino LIKE CONCAT('%', :pesquisa, '%');";
                $fields = array('pesquisa' => $pesquisa);
            } else {
                $query = "SELECT * FROM Guia
                    INNER JOIN Categoria ON Guia.categoria_id = Categoria.id
                    WHERE Categoria.categoria = :categoria
                    AND Guia.nomeDestino LIKE CONCAT('%', :pesquisa, '%');";
                $fields = array('categoria' => $categoria,
                                'pesquisa' => $pesquisa);
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
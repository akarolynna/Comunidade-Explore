<?php

    require_once "../Dao/PDOConnection.class.php";
    
    class DiarioDao {
        private $connection;

        public function __construct() {
            $this->connection = new PDOConnection();
        }

        private function getResult($query, $fields) {
            $this->connection->connection();
            $stm = $this->connection->prepareStatement($query, $fields);
            return $this->connection->executeStatement($stm);
        }

        public function buscarPorId($diarioId) {
            $query = 'SELECT * FROM DiarioViagem WHERE diarioviagem.id = :diarioId';
            $fields = array('diarioId' => $diarioId);
            $result = [];
            
            try {
                $result = $this->getResult($query, $fields);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result;
        }

        public function cadastrarDiarioViagem(DiarioViagem $diarioViagem){
            $options = [
                'foto' => $diarioViagem->getFoto(),
                'titulo'=>$diarioViagem->getTitulo(),
                'localizacao'=>$diarioViagem->getLocalizacao(),
                'criadorId' => $diarioViagem->getCriadorId()
               
            ];
            $query = "INSERT INTO DiarioViagem (foto, titulo, localizacao,criador_id) VALUES (:foto, :titulo, :localizacao, :criadorId);";
            try {
                $this->connection->connection();
                $statement = $this->connection->prepareStatement($query, $options);
                return $this->connection->executeStatement($statement);
            } catch (Exception $ex) {
                throw new Exception("Erro ao tentar adicionar usuário no Banco de Dados <br>" . $ex->getMessage());
            }
        }

    }

?>
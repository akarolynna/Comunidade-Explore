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

        public function exibirDiariosViagem($criadorId) {
            $query = "SELECT * FROM DiarioViagem WHERE criador_id = :criador_id";
            $options = [
                'criador_id' => $criadorId
            ];
        
            try {
                $this->connection->connection();
                $statement = $this->connection->prepareStatement($query, $options);
                return $this->connection->executeStatement($statement);
            } catch (Exception $ex) {
                throw new Exception("Erro ao tentar recuperar diários de viagem do banco de dados: " . $ex->getMessage());
            }
        }        
        public function atualizarDiarioViagem($diarioViagem)
        {
            $query = "UPDATE DiarioViagem SET imagem = :imagem, titulo = :titulo, descricao = :descricao WHERE id = :id";
            $options = [
                'imagem' => $diarioViagem->getImagem(),
                'titulo' => $diarioViagem->getTitulo(),
                'descricao' => $diarioViagem->getDescricao(),
                'id' => $diarioViagem->getId()
            ];
            
            try {
                $this->connection->connection();
                $statement = $this->connection->prepareStatement($query, $options);
                return $this->connection->executeStatement($statement);
            } catch (Exception $ex) {
                throw new Exception("Erro ao tentar atualizar o diário de viagem no Banco de Dados <br>" . $ex->getMessage());
            }
        }
        
    }

?>
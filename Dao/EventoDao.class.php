<?php

    require_once "../Dao/PDOConnection.class.php";
    require_once "../Model/Categoria.enum.php";

    class EventoDao {
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
                $query = "SELECT * FROM Evento WHERE Evento.titulo LIKE CONCAT('%', :pesquisa, '%');";
                $fields = array('pesquisa' => $pesquisa);
            } else {
                $query = "SELECT * FROM Evento
                    INNER JOIN Categoria ON Evento.categoriaId = Categoria.id
                    WHERE Categoria.categoria = :categoria
                    AND Evento.titulo LIKE CONCAT('%', :pesquisa, '%');";
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

        public function cadastrarEvento($evento) {
            $query = 'INSERT INTO Evento (
                titulo, 
                localizacao, 
                dataInicio, 
                horaInicio, 
                dataTermino, 
                horaTermino, 
                descricao, 
                fotoCapa, 
                maxParticipantes, 
                arquivado, 
                categoriaId, 
                criadorId
            ) VALUES (
                :titulo, 
                :localizacao, 
                :dataInicio, 
                :horaInicio, 
                :dataTermino, 
                :horaTermino, 
                :descricao, 
                :fotoCapa, 
                :maxParticipantes, 
                :arquivado, 
                :categoriaId, 
                :criadorId
            );';

            $fields = array(
                'titulo' => $evento->getTitulo(), 
                'localizacao' => $evento->getLocalizacao(), 
                'dataInicio' => $evento->getDataInicio(), 
                'horaInicio' => $evento->getHoraInicio(), 
                'dataTermino' => $evento->getDataTermino(), 
                'horaTermino' => $evento->getHoraTermino(), 
                'descricao' => $evento->getDescricao(), 
                'fotoCapa' => $evento->getFotoCapa(), 
                'maxParticipantes' => $evento->getMaxParticipantes(), 
                'arquivado' => $evento->getArquivado(), 
                'categoriaId' => $evento->getCategoriaId(), 
                'criadorId' => $evento->getCriadorId()
            );
            
            $result = 0;    
            try {
                $result = $this->getResult($query, $fields);

                $eventoIdStm = $this->connection->prepareStatement('SELECT LAST_INSERT_ID()', []);
                $eventoIdResult = $this->connection->executeStatement($eventoIdStm);
                $eventoId = $eventoIdResult[0]['LAST_INSERT_ID()'];

                $colaboradoresId = array_map('intval', json_decode($evento->getColaboradores(), true));
                foreach($colaboradoresId as $colaboradorId) {
                    if(!$this->cadastrarColaborador($eventoId, $colaboradorId)) {
                        echo 'Erro ao cadastrar colaborador';
                    }
                }
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result > 0;
        }

        private function cadastrarColaborador($eventoId, $colaboradorId) {
            $query = 'INSERT INTO Evento_Colaborador (eventoId, membroId) VALUES (:eventoId, :colaboradorId)';
            $fields = array(
                'eventoId' => $eventoId,
                'colaboradorId' => $colaboradorId
            );
            $result = 0;

            try {
                $result = $this->getResult($query, $fields);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result > 0;
        }
    }

?>
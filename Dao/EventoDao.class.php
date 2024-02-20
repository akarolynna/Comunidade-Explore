<?php

require_once "../Dao/PDOConnection.class.php";
require_once "../Model/Categoria.enum.php";

class EventoDao
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDOConnection();
    }

    private function getResult($query, $fields)
    {
        $this->connection->connection();
        $stm = $this->connection->prepareStatement($query, $fields);
        return $this->connection->executeStatement($stm);
    }

    public function buscar($categoria, $pesquisa)
    {
        if ($categoria == strtolower(Categoria::TODOS)) {
            $query = "SELECT * FROM Evento WHERE Evento.titulo LIKE CONCAT('%', :pesquisa, '%');";
            $fields = array('pesquisa' => $pesquisa);
        } else {
            $query = "SELECT * FROM Evento
                    INNER JOIN Categoria ON Evento.categoriaId = Categoria.id
                    WHERE Categoria.categoria = :categoria
                    AND Evento.titulo LIKE CONCAT('%', :pesquisa, '%');";
            $fields = array(
                'categoria' => $categoria,
                'pesquisa' => $pesquisa
            );
        }
        $result = [];
        try {
            $result = $this->getResult($query, $fields);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }

    public function editarEvento($evento, $eventoId) {
        $query = 'UPDATE Evento SET
                titulo = :titulo, 
                localizacao = :localizacao, 
                dataInicio = :dataInicio, 
                horaInicio = :horaInicio, 
                dataTermino = :dataTermino, 
                horaTermino = :horaTermino, 
                descricao = :descricao, 
                maxParticipantes = :maxParticipantes, 
                categoriaId = :categoriaId
            WHERE
                id = :id
        ';

        $fields = array(
            'titulo' => $evento->getTitulo(),
            'localizacao' => $evento->getLocalizacao(),
            'dataInicio' => $evento->getDataInicio(),
            'horaInicio' => $evento->getHoraInicio(),
            'dataTermino' => $evento->getDataTermino(),
            'horaTermino' => $evento->getHoraTermino(),
            'descricao' => $evento->getDescricao(),
            'maxParticipantes' => $evento->getMaxParticipantes(),
            'categoriaId' => $evento->getCategoriaId(),
            'id' => $eventoId,
        );
        $result = 0;

        try {
            $result = $this->getResult($query, $fields);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result > 0;
    }

    public function cadastrarEvento($evento)
    {
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
            foreach ($colaboradoresId as $colaboradorId) {
                if (!$this->cadastrarColaborador($eventoId, $colaboradorId)) {
                    echo 'Erro ao cadastrar colaborador';
                }
            }
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result > 0;
    }

    private function cadastrarColaborador($eventoId, $colaboradorId)
    {
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

    public function excluirEvento($eventoId) {
        $query = 'DELETE FROM Evento WHERE id = :eventoId';
        $fields = array('eventoId' => $eventoId);
        $result = 0;
        
        try {
            $result = $this->getResult($query, $fields);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result > 0;
    }

    public function buscarEventoPorId($eventoId) {
        $query = "SELECT * FROM Evento WHERE Evento.id = :eventoId";
        $fields = array('eventoId' => $eventoId);
        $result = [];
        try {
            $result = $this->getResult($query, $fields);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }

    public function buscarColaboradores($eventoId) {
        $query = "SELECT * FROM Evento_Colaborador WHERE eventoId = :eventoId";
        $fields = array('eventoId' => $eventoId);
        $result = [];
        try {
            $result = $this->getResult($query, $fields);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }

    public function exibirEventosUsuario($criadorId)
    {
        $query = "SELECT * FROM Evento WHERE criadorId = :criadorId";
        $options = [
            'criadorId' => $criadorId
        ];
        try {
            $this->connection->connection();
            $statement = $this->connection->prepareStatement($query, $options);
            return $this->connection->executeStatement($statement);
        } catch (Exception $ex) {
            throw new Exception("Erro ao tentar recuperar Eventos do banco de dados: " . $ex->getMessage());
        }
    }
}

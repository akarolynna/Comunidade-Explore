<?php

    require_once "../Dao/PDOConnection.class.php";
    require_once "../Model/Categoria.enum.php";
    require_once "../Model/Desafio.class.php";
    
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
                    AND Guia.nome_destino LIKE CONCAT('%', :pesquisa, '%');";
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

        public function buscarPorId($guiaId) {
            $query = 'SELECT * FROM Guia WHERE guia.id = :guiaId';
            $fields = array('guiaId' => $guiaId);
            $result = [];
            
            try {
                $result = $this->getResult($query, $fields);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result;
        }

        public function cadastrarGuia($guia) {
            $query = "INSERT INTO Guia(
                nomeDestino,
                localizacao,
                corPrincipal,
                descricao,
                clima,
                epocaVisita,
                culturaHistoria,
                areasContribuicao,
                fotoCapa,
                fotosSecundarias,
                publico,
                arquivado,
                categoriaId,
                criadorId
            ) VALUES (
                :nomeDestino,
                :localizacao,
                :corPrincipal,
                :descricao,
                :clima,
                :epocaVisita,
                :culturaHistoria,
                :areasContribuicao,
                :fotoCapa,
                :fotosSecundarias,
                :publico,
                :arquivado,
                :categoriaId,
                :criadorId
            );";
            $fields = array(
                'nomeDestino' => $guia->getNomeDestino(),
                'localizacao' => $guia->getLocalizacao(),
                'corPrincipal' => strval($guia->getCorPrincipal()),
                'descricao' => $guia->getDescricao(),
                'clima' => $guia->getClima(),
                'epocaVisita' => $guia->getEpocaVisita(),
                'culturaHistoria' => $guia->getCulturaHistoria(),
                'areasContribuicao' => json_encode($guia->getAreasContribuicao()),
                'fotoCapa' => $guia->getFotoCapa(),
                'fotosSecundarias' => json_encode($guia->getFotosSecundarias()),
                'publico' => $guia->getPublico(),
                'arquivado' => $guia->getArquivado(),
                'categoriaId' => $guia->getCategoria(),
                'criadorId' => $guia->getCriadorId(),
            );

            $result = 0;    
            try {
                $result = $this->getResult($query, $fields);

                $guiaIdStm = $this->connection->prepareStatement('SELECT LAST_INSERT_ID()', []);
                $guiaIdResult = $this->connection->executeStatement($guiaIdStm);
                $guiaId = $guiaIdResult[0]['LAST_INSERT_ID()'];

                $desafios = [];
                foreach (json_decode($guia->getDesafios(), true) as $desafio) {
                    $desafioModel = new Desafio(
                        $desafio["titulo"], 
                        $desafio["descricao"], 
                        $guiaId
                    );
                    array_push($desafios, $desafioModel);
                }

                foreach($desafios as $desafio) {
                    if(!$this->cadastrarDesafio($guiaId, $desafio)) {
                        echo "Erro ao cadastrar desafio ".$desafio->getTitulo();
                    }
                }

                $colaboradoresId = array_map('intval', json_decode($guia->getColaboradores(), true));
                foreach($colaboradoresId as $colaboradorId) {
                    if(!$this->cadastrarColaborador($guiaId, $colaboradorId)) {
                        echo "Erro ao cadastrar desafio ".$desafio->getTitulo();
                    }
                }
                
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result > 0;
        }

        private function cadastrarDesafio($guiaId, $desafio) {
            $query = 'INSERT INTO Desafio (titulo, descricao, guiaId) VALUES (:titulo, :descricao, :guiaId)';
            $fields = array(
                'titulo' => $desafio->getTitulo(),
                'descricao' => $desafio->getDescricao(),
                'guiaId' => $guiaId
            );
            $result = 0;

            try {
                $result = $this->getResult($query, $fields);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result > 0;
        }

        private function cadastrarColaborador($guiaId, $colaboradorId) {
            $query = 'INSERT INTO Guia_Colaborador (guiaId, membroId) VALUES (:guiaId, :colaboradorId)';
            $fields = array(
                'guiaId' => $guiaId,
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
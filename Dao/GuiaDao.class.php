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
                $query = "SELECT * FROM Guia WHERE Guia.nome_destino LIKE CONCAT('%', :pesquisa, '%');";
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

        public function cadastrar($guia) {
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
                $this->connection->connection();
                $stm = $this->connection->prepareStatement($query, $fields);
                $result = $this->connection->executeStatement($stm);
                $guiaId = $this->connection->lastInsertId();
                echo 'Passou em!!!';
                echo $guiaId;
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
            return $result > 0;
        }
    }

?>
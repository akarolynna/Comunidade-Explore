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
                desafios,
                fotoCapa,
                fotosSecundarias,
                categorias,
                colaboradores,
                criador,
                publico,
                arquivado
            ) VALUES (
                :nomeDestino,
                :localizacao,
                :corPrincipal,
                :descricao,
                :clima,
                :epocaVisita,
                :culturaHistoria,
                :areasContribuicao,
                :desafios,
                :fotoCapa,
                :fotosSecundarias,
                :categorias,
                :colaboradores,
                :criador,
                :publico,
                :arquivado
            );";
            $fields = array(
                'nomeDestino' => $guia->getNomeDestino(),
                'localizacao' => $guia->getLocalizacao(),
                'corPrincipal' => $guia->getCorPrincipal(),
                'descricao' => $guia->getDescricao(),
                'clima' => $guia->getClima(),
                'epocaVisita' => $guia->getEpocaVisita(),
                'culturaHistoria' => $guia->getCulturaHistoria(),
                'areasContribuicao' => $guia->getAreasContribuicao(),
                'desafios' => $guia->getDesafios(),
                'fotoCapa' => $guia->getFotoCapa(),
                'fotosSecundarias' => $guia->getFotosSecundarias(),
                'categorias' => $guia->getCategorias(),
                'colaboradores' => $guia->getColaboradores(),
                'criador' => $guia->getCriador(),
                'publico' => $guia->getPublico(),
                'arquivado' => $guia->getArquivado()
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
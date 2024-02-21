<?php

require_once "../Dao/PDOConnection.class.php";
require_once "../Model/Categoria.enum.php";

class PostDao
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

    public function buscarPosts($categoria, $pesquisa)
    {
        if ($categoria == strtolower(Categoria::TODOS)) {
            $query = "SELECT * FROM Post WHERE Post.conteudo LIKE CONCAT('%', :pesquisa, '%');";
            $fields = array('pesquisa' => $pesquisa);
        } else {
            $query = "SELECT * FROM Post
                    INNER JOIN DiarioViagem ON Post.diarioId = DiarioViagem.id
                    INNER JOIN Categoria ON DiarioViagem.categoriaId = Categoria.id
                    WHERE Categoria.categoria = :categoria
                    AND Post.conteudo LIKE CONCAT('%', :pesquisa, '%');";
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

    public function cadastrarPost(POST $posts)
    {
        $options = [
            'fotos' => json_encode($posts->getFotos()),
            'descricao' => $posts->getDescricao(),
            'titulo' => $posts->getTitulo(),
            'diarioViagem' => $posts->getDiarioViagem()

        ];
        $query = "INSERT INTO POST (fotos, descricao, titulo,diario_id) VALUES (:fotos, :descricao, :titulo, :diarioViagem);";
        try {
            $this->connection->connection();
            $statement = $this->connection->prepareStatement($query, $options);
            return $this->connection->executeStatement($statement);
        } catch (Exception $ex) {
            throw new Exception("Erro ao tentar adicionar POST no Banco de Dados <br>" . $ex->getMessage());
        }
    }
}

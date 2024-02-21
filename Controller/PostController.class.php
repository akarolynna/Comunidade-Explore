<?php

require_once '../Dao/PostDao.class.php';
require_once '../Model/Post.class.php';
require_once '../Dao/DiarioDao.class.php';

try {
    $postController = new PostController();
    $postController->tratarRequisicao();
} catch (Exception $ex) {
    echo $ex;
}

class PostController
{
    private $postDao;

    public function __construct()
    {
        $this->postDao = new PostDao();
    }

    public function tratarRequisicao()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                isset($_GET['diarioViagem'])
                ? $this->buscarPostId()
                : $this->buscarPosts();
                break;
            case 'POST':
                if (!isset($_GET['acao'])) {
                    $this->cadastrar();
                } else {
                    // $this->editar();
                    echo 'me';
                }
                break;
                case 'DELETE':
                    $this->excluir();
                    break;
            default:
                throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida');
        }
    }

    public function buscarPosts()
    {
        $posts = $this->postDao->buscarPosts($_GET['categoria'], $_GET['pesquisa']);
        echo json_encode($posts);
    }

    public function cadastrar()
    {
        try {
            extract($_POST);

            $caminhoFotoSecundaria1 = $this->montarCaminhoFoto($titulo, 'fotoSecundaria1');
            $caminhoFotoSecundaria2 = $this->montarCaminhoFoto($titulo, 'fotoSecundaria2');
            $caminhoFotoSecundaria3 = $this->montarCaminhoFoto($titulo, 'fotoSecundaria3');
            $caminhoFotoSecundaria4 = $this->montarCaminhoFoto($titulo, 'fotoSecundaria4');
            $caminhoFotoSecundaria5 = $this->montarCaminhoFoto($titulo, 'fotoSecundaria5');


            if (
                move_uploaded_file($_FILES["fotoSecundaria1"]["tmp_name"], $caminhoFotoSecundaria1)
                && move_uploaded_file($_FILES["fotoSecundaria2"]["tmp_name"], $caminhoFotoSecundaria2)
                && move_uploaded_file($_FILES["fotoSecundaria3"]["tmp_name"], $caminhoFotoSecundaria3)
                && move_uploaded_file($_FILES["fotoSecundaria4"]["tmp_name"], $caminhoFotoSecundaria4)
                && move_uploaded_file($_FILES["fotoSecundaria5"]["tmp_name"], $caminhoFotoSecundaria5)
            ) {
                session_start();
                $diarioId = $_GET['diarioId'];
                $fotos = array($caminhoFotoSecundaria1, $caminhoFotoSecundaria2, $caminhoFotoSecundaria3, $caminhoFotoSecundaria4, $caminhoFotoSecundaria5);
                $post = new Post($fotos, $titulo, $descricao, $diarioId);
                if ($this->postDao->cadastrarPost($post)) {
                    echo json_encode('Post cadastrado com sucesso');
                } else {
                    echo 'Erro ao cadastrar post';
                }
            } else {
                echo 'Erro ao fazer upload da foto';
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    private function montarCaminhoFoto($titulo, $nomeArquivo)
    {
        if ($_FILES[$nomeArquivo]["name"] == '') return '';
        $extensao = pathinfo($_FILES[$nomeArquivo]["name"], PATHINFO_EXTENSION);
        $novoNomeFoto = "$titulo-guia-$nomeArquivo.$extensao";
        return "../Public/Imagens/fotosDiarioViagem/" . $novoNomeFoto;
    }
    private function buscarPostId()
{
    $posts = $this->postDao->bucarPost($_GET['diarioViagem']);
    echo json_encode($posts);
}

private function excluir() {
    try {
        if ($this->postDao->deletarPost($_GET['postId'])) {
            echo json_encode('Post excluido com sucesso');
        } else {
            echo 'Erro ao excluir evento';
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}
}

<?php

    require_once '../Dao/PostDao.class.php';

    try {
        $postController = new PostController();
        $postController->tratarRequisicao();
    } catch (Exception $ex) {
        echo $ex;
    }

    class PostController {
        private $postDao;

        public function __construct() {
            $this->postDao = new PostDao();
        }

        public function tratarRequisicao() {
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'GET':
                    $this->buscarPosts();
                    break;
                default:
                    throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida'); 
            }
        }

        public function buscarPosts() {
            $posts = $this->postDao->buscarPosts($_GET['categoria']);
            echo json_encode($posts);
        }
        
    }

?>
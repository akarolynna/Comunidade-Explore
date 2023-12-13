<?php

    require_once '../Dao/GuiaDao.class.php';

    try {
        $guiaController = new GuiaController();
        $guiaController->tratarRequisicao();
    } catch (Exception $ex) {
        echo $ex;
    }

    class GuiaController {
        private $guiaDao;

        public function __construct() {
            $this->guiaDao = new GuiaDao();
        }

        public function tratarRequisicao() {
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'GET':
                    $this->buscar();
                    break;
                default:
                    throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida'); 
            }
        }

        public function buscar() {
            $guias = $this->guiaDao->buscar($_GET['categoria'], $_GET['pesquisa']);
            echo json_encode($guias);
        }
    }

?>
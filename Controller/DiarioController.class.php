<?php

    require_once '../Dao/DiarioDao.class.php';

    try {
        $diarioController = new DiarioController();
        $diarioController->tratarRequisicao();
    } catch (Exception $ex) {
        echo $ex;
    }

    class DiarioController {
        private $diarioDao;

        public function __construct() {
            $this->diarioDao = new DiarioDao();
        }

        public function tratarRequisicao() {
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'GET':
                    isset($_GET['diarioId']) 
                        ? $this->buscarPorId()
                        : $this->buscar();
                    break;
                default:
                    throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida'); 
            }
        }

        public function buscarPorId() {
            $diario = $this->diarioDao->buscarPorId($_GET['diarioId']);
            echo json_encode($diario);
        }

        private function buscar() { }
        
    }

?>
<?php

    require_once '../Dao/EventoDao.class.php';

    try {
        $eventoController = new EventoController();
        $eventoController->tratarRequisicao();
    } catch (Exception $ex) {
        echo $ex;
    }

    class EventoController {
        private $eventoDao;

        public function __construct() {
            $this->eventoDao = new EventoDao();
        }

        public function tratarRequisicao() {
            switch($_SERVER['REQUEST_METHOD']) {
                case 'GET':
                    $this->buscar();
                    break;
                default:
                    throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida');                   
            }
        }

        public function buscar() {
            $eventos = $this->eventoDao->buscar($_GET['categoria'], $_GET['pesquisa']);
            echo json_encode($eventos);
        }
    }

?>
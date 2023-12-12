<?php

    require_once '../Dao/DiarioViagemDao.class.php';

    class DiarioViagemController {
        private $diarioViagemDao;

        public function __construct() {
            $this->diarioViagemdao = new DiarioViagemDao();
        }

        public function tratarRequisicao() {
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'GET':
                    $this->buscarDiariosViagem();
                    break;
                default:
                    throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida'); 
            }
        }

        public function buscarDiariosViagem() {
            $diariosViagem = $this->diarioViagemDao->buscarDiariosViagem();
            echo $diariosViagem;
        }
        
    }

?>
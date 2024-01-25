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
                case 'POST':
                    $this->cadastrar();
                    break;
                default:
                    throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida'); 
            }
        }

        public function buscar() {
            $guias = $this->guiaDao->buscar($_GET['categoria'], $_GET['pesquisa']);
            echo json_encode($guias);
        }

        public function cadastrar() {
            try {
                extract($_POST);
                echo $nomeDestino;
                echo $localizacao;
                echo $corPrincipal;
                echo $descricao;
                echo $clima;
                echo $epocaVisita;
                echo $culturaHistoria;
                echo $areasContribuicao;
                echo $desafios;
                echo $_FILES["fotoCapa"]["name"];
                echo $_FILES["fotoSecundaria1"]["name"];
                echo $_FILES["fotoSecundaria2"]["name"];
                echo $_FILES["fotoSecundaria3"]["name"];
                echo $colaboradores;

            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }

?>
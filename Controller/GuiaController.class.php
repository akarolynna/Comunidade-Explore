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
                echo $categorias;
                echo $colaboradores;

                $extensao = pathinfo($_FILES["fotoCapa"]["name"], PATHINFO_EXTENSION);
                $novoNomeFoto = $nomeDestino."-capa.".$extensao;
                $caminhoFotoCapa = "../Upload/".$novoNomeFoto;

                $extensao = pathinfo($_FILES["fotoSecundaria1"]["name"], PATHINFO_EXTENSION);
                $novoNomeFoto = $nomeDestino."-secundaria-1.".$extensao;
                $caminhoFotoSecundaria1 = "../Upload/".$novoNomeFoto;

                $extensao = pathinfo($_FILES["fotoSecundaria2"]["name"], PATHINFO_EXTENSION);
                $novoNomeFoto = $nomeDestino."-secundaria-2.".$extensao;
                $caminhoFotoSecundaria2 = "../Upload/".$novoNomeFoto;

                $extensao = pathinfo($_FILES["fotoSecundaria3"]["name"], PATHINFO_EXTENSION);
                $novoNomeFoto = $nomeDestino."-secundaria-3.".$extensao;
                $caminhoFotoSecundaria3 = "../Upload/".$novoNomeFoto;

                if (move_uploaded_file($_FILES["fotoCapa"]["tmp_name"], $caminhoFotoCapa)
                    && move_uploaded_file($_FILES["fotoSecundaria1"]["tmp_name"], $caminhoFotoSecundaria2) 
                    && move_uploaded_file($_FILES["fotoSecundaria2"]["tmp_name"], $caminhoFotoSecundaria2) 
                    && move_uploaded_file($_FILES["fotoSecundaria3"]["tmp_name"], $caminhoFotoSecundaria3) 
                ) {
                    echo 'Deu certo!!';


                } else {
                    echo 'Erro ao fazer upload da foto';
                }

            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }

?>
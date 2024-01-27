<?php

    require_once '../Dao/GuiaDao.class.php';
    require_once '../Model/Guia.class.php';

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

                $caminhoFotoCapa = $this->montarCaminhoFoto($nomeDestino, 'fotoCapa');
                $caminhoFotoSecundaria1 = $this->montarCaminhoFoto($nomeDestino, 'fotoSecundaria1');
                $caminhoFotoSecundaria2 = $this->montarCaminhoFoto($nomeDestino, 'fotoSecundaria2');
                $caminhoFotoSecundaria3 = $this->montarCaminhoFoto($nomeDestino, 'fotoSecundaria3');

                session_start();
                    $fotosSecundarias = array($caminhoFotoSecundaria2, $caminhoFotoSecundaria2, $caminhoFotoSecundaria3);

                    $guia = new Guia(
                        $nomeDestino,
                        $localizacao,
                        $corPrincipal,
                        $descricao,
                        $clima,
                        $epocaVisita,
                        $culturaHistoria,
                        $areasContribuicao,
                        $caminhoFotoCapa,
                        $fotosSecundarias,
                        0,
                        0,
                        $categoria,
                        $_SESSION['usuario']['id'],
                        $desafios,
                        $colaboradores,
                    );
                    
                    if($this->guiaDao->cadastrarGuia($guia)) {
                        // echo 'Guia cadastrado com sucesso';
                    } else {
                        echo 'Erro ao cadastrar guia';
                    }

                // if (move_uploaded_file($_FILES["fotoCapa"]["tmp_name"], $caminhoFotoCapa)
                //     && move_uploaded_file($_FILES["fotoSecundaria1"]["tmp_name"], $caminhoFotoSecundaria1) 
                //     && move_uploaded_file($_FILES["fotoSecundaria2"]["tmp_name"], $caminhoFotoSecundaria2) 
                //     && move_uploaded_file($_FILES["fotoSecundaria3"]["tmp_name"], $caminhoFotoSecundaria3) 
                // ) {
                //     session_start();
                //     $fotosSecundarias = array($caminhoFotoSecundaria2, $caminhoFotoSecundaria2, $caminhoFotoSecundaria3);

                //     $guia = new Guia(
                //         $nomeDestino,
                //         $localizacao,
                //         $corPrincipal,
                //         $descricao,
                //         $clima,
                //         $epocaVisita,
                //         $culturaHistoria,
                //         $areasContribuicao,
                //         $caminhoFotoCapa,
                //         $fotosSecundarias,
                //         0,
                //         0,
                //         $categoria,
                //         $_SESSION['usuario']['id'],
                //         $desafios,
                //         $colaboradores,
                //     );
                    
                //     if($this->guiaDao->cadastrarGuia($guia)) {
                //         // echo 'Guia cadastrado com sucesso';
                //     } else {
                //         echo 'Erro ao cadastrar guia';
                //     }

                // } else {
                //     echo 'Erro ao fazer upload da foto';
                // }

            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }

        private function montarCaminhoFoto($nomeDestino, $nomeArquivo) {
            $extensao = pathinfo($_FILES[$nomeArquivo]["name"], PATHINFO_EXTENSION);
            $novoNomeFoto = "$nomeDestino-$nomeArquivo.$extensao";
            return "../Public/Uploads/".$novoNomeFoto;
        }
    }

?>

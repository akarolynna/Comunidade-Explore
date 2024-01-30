<?php

    require_once '../Dao/EventoDao.class.php';
    require_once '../Model/Evento.class.php';

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
                case 'POST':
                    $this->cadastrar();
                    break;
                default:
                    throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida');                   
            }
        }

        private function buscar() {
            $eventos = $this->eventoDao->buscar($_GET['categoria'], $_GET['pesquisa']);
            echo json_encode($eventos);
        }

        private function cadastrar() {
            try {
                extract($_POST);
                
                $extensao = pathinfo($_FILES['fotoCapa']["name"], PATHINFO_EXTENSION);
                $novoNomeFoto = "$titulo-evento-fotoCapa.$extensao";
                $caminhoFotoCapa =  "../Uploads/".$novoNomeFoto;

                if (move_uploaded_file($_FILES["fotoCapa"]["tmp_name"], $caminhoFotoCapa)) {
                    session_start();

                    $evento = new Evento(
                        $titulo,
                        $localizacao,
                        $dataInicio,
                        $horaInicio,
                        $dataTermino,
                        $horaTermino,
                        $descricao,
                        $caminhoFotoCapa,
                        $maxParticipantes,
                        0,
                        $categoria,
                        $_SESSION['usuario']['id'],
                        $colaboradores,
                        [],);

                        if($this->eventoDao->cadastrarEvento($evento)) {
                            echo json_encode('Evento cadastrado com sucesso');
                        } else {
                            echo 'Erro ao cadastrar evento';
                        }

                } else {
                    echo 'Erro ao tentar fazer upload da foto';
                }

            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }

?>


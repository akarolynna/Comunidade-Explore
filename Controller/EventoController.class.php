<?php

require_once '../Dao/EventoDao.class.php';
require_once '../Model/Evento.class.php';


try {
    $eventoController = new EventoController();
    $eventoController->tratarRequisicao();
} catch (Exception $ex) {
    echo $ex;
}

class EventoController
{
    private $eventoDao;

    public function __construct()
    {
        $this->eventoDao = new EventoDao();
    }

    public function tratarRequisicao()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                if (isset($_GET['categoria']) && isset($_GET['pesquisa'])) {
                    $this->buscar();
                } else {
                    $this->buscarEventoUsuario();
                }
                break;
            case 'POST':
                $this->cadastrar();
                break;
            case 'DELETE':
                $this->excluir();
                break;
            default:
                throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida');
        }
    }

    private function buscar()
    {
        $eventos = $this->eventoDao->buscar($_GET['categoria'], $_GET['pesquisa']);
        echo json_encode($eventos);
    }

    private function excluir() {
        try {
            
            if ($this->eventoDao->excluirEvento($_GET['eventoId'])) {
                echo json_encode('Evento excluido com sucesso');
            } else {
                echo 'Erro ao excluir evento';
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    private function buscarEventoUsuario()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        try {
            $criadorId = $_SESSION['usuario']['id'];
            $eventos = $this->eventoDao->exibirEventosUsuario($criadorId);
            echo json_encode($eventos);
        } catch (Exception $ex) {
            echo '<script>console.error("' . $ex->getMessage() . '");</script>';
            // Retorna uma string vazia para indicar que ocorreu um erro
            return '';
        }
    }
    
    private function cadastrar()
    {
        try {
            extract($_POST);

            $caminhoFotoCapa = $this->uploadFoto();

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
                []
            );

            if ($this->eventoDao->cadastrarEvento($evento)) {
                echo json_encode('Evento cadastrado com sucesso');
            } else {
                echo 'Erro ao cadastrar evento';
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    private function uploadFoto()
    {
        $diretorioDestino = "../Uploads/";
        $arquivo = $_FILES['fotoCapa']['name']; // Alterado de 'foto' para 'fotoCapa'
        $caminhoCompleto = $diretorioDestino . $arquivo;
        if (move_uploaded_file($_FILES['fotoCapa']['tmp_name'], $caminhoCompleto)) { // Alterado de 'foto' para 'fotoCapa'
            return $caminhoCompleto;
        } else {
            throw new Exception("Falha no upload da foto.");
        }
    }
}
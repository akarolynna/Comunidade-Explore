<?php

require_once '../Dao/DiarioDao.class.php';
require_once '../Model/DiarioViagem.class.php';

try {
    $diarioController = new DiarioController();
    $diarioController->tratarRequisicao();
} catch (Exception $ex) {
    echo $ex;
}
// $diarioController = new DiarioController();

// // Chama a função buscarDiario()
// $diarios = $diarioController->buscarDiario();

// // Imprime os dados retornados
// header('Content-Type: application/json');
// echo $diarios;
class DiarioController
{
    private $diarioDao;

    public function __construct()
    {
        $this->diarioDao = new DiarioDao();
    }

    public function tratarRequisicao()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                isset($_GET['diarioId'])
                    ? $this->buscarPorId()
                    : $this->buscarDiario();
                break;
            case 'POST':
                $this->criarDiario();
                break;

            default:
                throw new Exception('Erro ao tentar realizar a operação.<br> Requisição desconhecida');
        }
    }

    public function buscarPorId()
    {
        $diario = $this->diarioDao->buscarPorId($_GET['diarioId']);
        echo json_encode($diario);
    }

    // public function buscarDiario()
    // {
    //     if (session_status() == PHP_SESSION_NONE) {
    //         session_start();
    //     }

    //     $criador_id = $_SESSION['usuario']['id'];
    //     $diarios = $this->diarioDao->exibirDiariosViagem($criador_id);
    //     return json_encode($diarios);
        
    // }
    public function buscarDiario()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    
        try {
            $criador_id = $_SESSION['usuario']['id'];
            $diarios = $this->diarioDao->exibirDiariosViagem($criador_id);
            echo json_encode($diarios);
        } catch (Exception $ex) {
            echo '<script>console.error("' . $ex->getMessage() . '");</script>';
            // Retorna uma string vazia para indicar que ocorreu um erro
            return '';
        }
    }
    

    public function criarDiario(){
        try {
            session_start(); // Inicia a sessão para conseguir pegar o $_SESSION['usuario']['id'];

            $fotoCaminho = $this->uploadFoto();

            extract($_POST);
            $diario = new DiarioViagem(0, $fotoCaminho, $titulo, $localizacao, $_SESSION['usuario']['id']);
            $resultado = $this->diarioDao->cadastrarDiarioViagem($diario);
            if ($resultado) {
                http_response_code(200);
                echo json_encode(array('success' => true));
            } else {
                http_response_code(400);
                echo json_encode(array('success' => false, 'message' => 'Falha ao inserir Diário'));
            }
        } catch (Exception $ex) {
            http_response_code(500);
            echo json_encode(array('success' => false, 'message' => 'Erro ao processar requisição: ' . $ex->getMessage()));
        }
    }

    private function uploadFoto()
    {
        $diretorioDestino  = "../Public/Imagens/";
        $arquivo  = $_FILES['foto']['name'];
        $caminhoCompleto = $diretorioDestino . $arquivo;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
            return $caminhoCompleto;
        } else {
            throw new Exception("Falha no upload da foto.");
        }
    }
}

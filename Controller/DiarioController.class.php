<?php

require_once '../Dao/DiarioDao.class.php';
require_once '../Model/DiarioViagem.class.php';

try {
    $diarioController = new DiarioController();
    $diarioController->tratarRequisicao();
} catch (Exception $ex) {
    echo $ex;
}

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
                    : $this->buscar();
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

    private function buscar()
    {
    }

    public function criarDiario()
    {
        try {
            $fotoCaminho = $this->uploadFoto();

            extract($_POST);
            $diario = new DiarioViagem(0, $fotoCaminho, $titulo, $localizacao, $_SESSION['usuario']['id']);
            $resultado = $this->diarioDao->cadastrarDiarioViagem($diario);
            if ($resultado) {
                echo  "Inserção feita com sucesso";
            } else {
                echo "Falha ao inserir Diário";
            }
        } catch (Exception $ex) {
            throw new Exception("Erro ao processar requisição" . $ex->getMessage() . '<br>', 1);
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

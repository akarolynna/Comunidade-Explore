<?php
require_once '../Dao/MembroDao.class.php';
require_once '../Model/MembroModel.class.php';

try {
    $membroController = new MembroController();
    $membroController->verificaAcao();
} catch (Exception $ex) {
    echo "Erro ao autenticar o membro: " . $ex->getMessage() . '<br>';
}


class MembroController
{
    private $membroDao;
    public function __construct()
    {
        $this->membroDao = new MembroDao();
    }

    public function verificaAcao()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'POST':
                if (!isset($_POST['_acao'])) {
                    throw new Exception('Erro ao tentar realizar operação');
                } else {
                    $this->verificaAcaoTipoPost($_POST['_acao']);
                }
                break;
            case 'GET':
                isset($_GET['membroId'])
                    ? $this->buscarMembroPorId()
                    : $this->buscarMembros();
                break;
            default:
                throw new Exception("Nenhuma ação foi passada");
        }
    }

    private function verificaAcaoTipoPost($_acao)
    {
        switch ($_acao) {
            case 'cadastro':
                $this->cadastrarMembro();
                break;
            case 'login':
                $this->logarMembro();
                break;
            case 'editar':
                //dados enviados de um formulário $_POST
                $this->atualizarMembro($_POST);
                break;
                //outras funções como o login que usam o método POST
            default:
                throw new Exception("Erro ao processar a requisição");
        }
    }

    public function cadastrarMembro()
    {
        try {
            $fotoCaminho = $this->uploadFoto();

            extract($_POST);
            $membro = new MembroModel(0, $fotoCaminho, $nome, $email, $senha);
            $resultado = $this->membroDao->criarMembro($membro);
            if ($resultado) {
                echo json_encode(array('success' => 'Inserção bem-sucedida!'));
            } else {
                echo json_encode(array('error' => 'Falha na inserção.'));
            }
        } catch (Exception $ex) {
            echo json_encode(array('error' => 'Erro no Controller ao tentar realizar o cadastro ' . $ex->getMessage()));
        }
    }

    private function uploadFoto()
    {
        $diretorioDestino  = "../Public/Imagens/fotosCadastroMembro/";
        $arquivo  = $_FILES['foto']['name'];
        $caminhoCompleto = $diretorioDestino . $arquivo;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
            return $caminhoCompleto;
        } else {
            throw new Exception("Falha no upload da foto.");
        }
    }


    public function logarMembro()
    {
        try {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $autenticado = $this->membroDao->autenticandoMembro($email, $senha);

            if ($autenticado) {
                echo "Autenticação bem-sucedida! <br>";
                $this->iniciarSessao($email);
            } else {
                echo "Autenticação falhou. Verifique suas credenciais.<br>";
            }
        } catch (Exception $ex) {
            echo "Erro ao autenticar o membro: " . $ex->getMessage() . "<br>";
        }
    }

    public function iniciarSessao($email)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['email'] = $email;
        $usuarioDoBanco = $this->membroDao->consultarDadosMembro($email);
        $_SESSION['usuario'] = $usuarioDoBanco;

        $paginaInicial = "../View/pagina-inicial.php";
        header("Location: $paginaInicial");

        exit();
    }
    private function buscarMembros()
    {
        $membros = $this->membroDao->buscarMembros();
        echo json_encode($membros);
    }

    public function buscarMembroPorId()
    {
        $membro = $this->membroDao->buscarMembroPorId($_GET['membroId']);
        echo json_encode($membro);
    }

    public function atualizarMembro($dados)
    {
        try {
            $resultado = $this->membroDao->atualizarMembro($dados);

            if ($resultado) {
                echo json_encode(array('success' => 'Atualização bem-sucedida.'));
            } else {
                echo json_encode(array('error' => 'Falha na atualização.'));
            }
        } catch (Exception $ex) {
            throw new Exception("Erro no Controller ao tentar realizar a atualização: " . $ex->getMessage());
        }
    }
}

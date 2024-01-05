<?php
require_once '../Dao/MembroDao.class.php';
require_once '../Model/MembroModel.class.php';

try {
    $membroController = new MembroController();
    $membroController->verificaAcao();
} catch (Exception $ex) {
    echo "Erro ao autenticar o membro: " . $ex->getMessage(). '<br>';
}

class MembroController{
    private $membroDao;
    public function __construct(){
        $this->membroDao = new MembroDao();
    }

    public function verificaAcao(){
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'POST':
                if (!isset($_POST['_acao'])) {
                    throw new Exception('Erro ao tentar realizar operação');
                } else {
                    $this->verificaAcaoTipoPost($_POST['_acao']);
                }
                break;
            default:
                throw new Exception("Nenhuma ação foi passada");
        }
    }

    private function verificaAcaoTipoPost($_acao){
        switch ($_acao) {
            case 'cadastro':
                $this->cadastrarMembro();
                break;
            case 'login':
                $this->logarMembro();
                break;
                //outras funções como o login que usam o método POST
            default:
                throw new Exception("Erro ao processar a requisição");
        }
    }

    public function cadastrarMembro(){
        try {
            $fotoCaminho = $this->uploadFoto();

            extract($_POST);
            $membro = new MembroModel(0, $fotoCaminho, $email, $senha);
            $resultado = $this->membroDao->criarMembro($membro);
            if ($resultado) {
                // Para ficar mais robusto depois eu tenho que mudar para me retornar um ajax
                echo "Inserção bem-sucedida!";
            } else {
                echo "Falha na inserção.";
            }
        } catch (Exception $ex) {
            throw new Exception("Erro no Controller ao tentar realizar o cadastro " . $ex->getMessage(). '<br>', 0);
        }
    }

    private function uploadFoto(){
        $diretorioDestino  = "../Public/Imagens/";
        $arquivo  = $_FILES['foto']['name'];
        $caminhoCompleto = $diretorioDestino . $arquivo;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
            // Retorna o caminho completo da foto após o upload bem-sucedido
            return $caminhoCompleto;
        } else {
            throw new Exception("Falha no upload da foto.");
        }
    }

    
    public function logarMembro() {
        try {
            // Obtém os dados do formulário
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
    public function iniciarSessao($email){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['email'] = $email;
        $paginaInicial = "../View/pagina-inicial.php";

        header("Location: $paginaInicial");
        exit();
    }
}
?>
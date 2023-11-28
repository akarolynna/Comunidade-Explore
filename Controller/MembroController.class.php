<?php
require_once '../Model/MembroModel.class.php';
require_once '../Dao/MembroDao.class.php';

class MembroController
{
    private $daoMembro;

    public function __construct()
    {
        $this->daoMembro = new MembroDao();
    }

    public function cadastrarUsuario()
    {
        echo 'passei cadastrarUsuario';
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["acao"])) {
            $acao = $_POST["acao"];

            if ($acao === "cadastro") {
                $nomeArquivo = $_FILES['foto']['name'];
                $caminhoCompleto = "../Public/Imagens/" . $nomeArquivo;

                if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
                

                    // Obtendo dados do formulário
                    $email = $_POST["email"];
                    $senha = $_POST["senha"];

                    // Criando instância de MembroModel
                    $membro = new MembroModel(0, $caminhoCompleto, $email, password_hash($senha, PASSWORD_DEFAULT));

                    try {
                        // Chamando a função de cadastro no MembroDao
                        $resultado = $this->daoMembro->cadastroMembro($membro);

                        if ($resultado) {
                            http_response_code(200);
                            echo 'Cadastro realizado com sucesso!';
                        } else {
                            http_response_code(500);
                            echo 'Erro ao tentar realizar o cadastro.';
                        }
                    } catch (Exception $ex) {
                        http_response_code(500);
                        echo $ex->getMessage();
                    }
                }
            }
        }
    }
    public function handleRequest()
{
    try {
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["acao"]) && $_POST["acao"] === "cadastro") {
            $this->cadastrarUsuario();
        }
    } catch (Exception $ex) {
        http_response_code(500);
        echo $ex->getMessage();
    }
}
}
try {
    $membroController = new MembroController();
    $membroController->handleRequest();
} catch (Exception $ex) {
    http_response_code(500);
    echo $ex->getMessage();
}


?>

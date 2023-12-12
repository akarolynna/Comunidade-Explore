<?php

require_once '../Dao/MembroDao.class.php';
require_once '../Model/MembroModel.class.php';


try {
    // Crie um objeto MembroModel com dados de exemplo
    $membro = new MembroModel('1', 'caminho/para/a/foto.jpg', 'exemplo@email.com', 'senha_secreta');

   
    // Crie uma instância da classe MembroDao
    $membroDao = new MembroDao();

    // Chame a função de inserção
    $resultado = $membroDao->criarMembro($membro);

    // Verifique o resultado
    if ($resultado) {
        echo "Inserção bem-sucedida!";
    } else {
        echo "Falha na inserção.";
    }
} catch (Exception $ex) {
    echo "Erro: " . $ex->getMessage();
}
?>
<?php
require_once '../Dao/MembroDao.class.php';

$membroDao = new MembroDao();

try {
    $email = 'souzaannakarolynna81@gmail.com';
    $senha = '#Salmo91Salmo121';

    $resultadoAutenticacao = $membroDao->autenticandoMembro($email, $senha);

    if ($resultadoAutenticacao) {
        echo "Autenticação bem-sucedida!\n";
    } else {
        echo "Falha na autenticação. Verifique suas credenciais.\n";
    }

} catch (Exception $ex) {
    echo "Erro durante o teste: " . $ex->getMessage() . "\n";
}
?>

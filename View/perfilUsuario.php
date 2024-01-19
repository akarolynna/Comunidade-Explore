<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/CSS/PerfilUsuario.css">
    <title>Meu Perfil</title>
    <!-- <title>?php echo  $_SESSION['usuario']['nome']; ?></title> -->
</head>

<body>
    <header>
        <div class="logo">
            <img src="../Public/Imagens/LogoExplore.png" alt="Logo de bussola">
            <h6> Comunidade-Explore </h6>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Desafios</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Diários de Viagem</a></li>
                <li><a href="#">Seguindo</a></li>
            </ul>
        </nav>
    </header>
    <article>
        <div class="informacoes-membro">
            <div class="imagemPerfil">
            <img src="<?php echo $_SESSION['usuario']['foto']; ?>" alt="Foto do usuário" class="imagemUsuario dropdown-toggle" id="imagemUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </div>

        </div>
        <div class="descricao-membro"></div>
        <div class="area-cards"></div>
    </article>

</body>

</html>
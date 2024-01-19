<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <div class="informacoesUsuario">
                <div class="tituloInformacoesUsuario">
                    <h3>Anna Karolynna</h3><!-- <span>php echo  $_SESSION['usuario']['email']; ?></span> -->
                </div>

                <div class="grupoInformacoes">
                    <label for="aniversario">Aniversário:</label>
                    <span> 07/01/2003</span>
                </div>

                <div class="grupoInformacoes">
                    <label for="destinoFav">Destino Favorito:</label>
                    <span> Roma, Florença3</span>
                </div>

                <div class="grupoInformacoes">
                    <label for="redesSociais">Redes Sociais: </label>
                    <img src="../Public/Imagens/iconeInstagram.png" alt="Ícone do Instagram por Icons8">
                </div>

                <div class="grupoInformacoes">
                    <button type="button" class="botaoEditarPerfil">Editar Perfil</button>
                </div>
            </div>
            <div class="descricao-membro"></div>
            <div class="area-cards"></div>
    </article>

</body>

</html>
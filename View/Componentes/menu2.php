<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../Public/CSS/menu2.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="menu">
            <ul class="logo">
                <li><img src="./../Public/Imagens/LogoExplore.png" alt="Logo"></li>
                <li>
                    <h6><a>Comunidade-Explore</a></h6>
                </li>
            </ul>
            <ul class="menu-list ">
                <li>
                    <div class="grupo">
                        <button class="btn btn-success btn-sm botao" data-toggle="modal" data-target="#modalCriarPublicacao">Criar publicação</button>
                        <div class="modal" id="modalCriarPublicacao">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Qual tipo de publicação você deseja criar?</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="buttonContainer">
                                        <button type="button" class="button botaoDiario" id="btnOpcaoPublicacaoDiario">
                                            <img src="./../Public/Imagens/pena-icone-verde.png" alt="opcao publicação" class="w-50">
                                            <span>Diário</span>
                                        </button>
                                        <a href="./cadastroEvento.php" class="button botaoDiario ">
                                            <img src="./../Public/Imagens/evento-icone-verde.png" alt="opcao publicação" class="w-50">
                                            <span>Evento</span>
                                        </a>
                                        <a href="./cadastroGuia.php" class="button botaoDiario">
                                            <img src="./../Public/Imagens/guia-icone-verde.png" alt="opcao publicação" class="w-50">
                                            <span>Guia</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu-left">
                            <!-- <img src="../../Public/Imagens/WhatsApp Image 2024-01-11 at 22.37.39.jpeg" alt=" Foto de usuário" class="imagemUsuario dropdown-toggle" id="imagemUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                            <img src="<?php echo $_SESSION['usuario']['foto'] ?>" alt=" Foto de usuário" class="imagemUsuario dropdown-toggle" id="imagemUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown-menu" aria-labelledby="imagemUsuario">
                                <a href="./perfilUsuario.php" class="dropdown-item">Meu perfil</a>
                                <a href="./logout.php" class="dropdown-item">Sair</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Fim do código inserido -->
            </ul>
        </nav>
    </header>


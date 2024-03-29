<nav class="menu">
    <a class="grupo" href="./pagina-inicial.php">
        <img src="../Public/Imagens/LogoExplore.png" alt="Logo de bussola" class="logo">
        <h1 class="titulo">Comunidade Explore</h1>
    </a>
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
                            <!-- <a href="./CadastroDiarioViagem.php" class="button botaoDiario" id="btnOpcaoPublicacaoDiario"> -->
                            <img src="./../Public/Imagens/pena-icone-verde.png" alt="opcao publicação" class="w-50">
                            <span>Diário</span></button>
                        </a>
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
            <img src="<?php echo $_SESSION['usuario']['foto'] ?>" alt=" Foto de usuário" class="imagemUsuario dropdown-toggle" id="imagemUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="dropdown-menu" aria-labelledby="imagemUsuario">
                <a href="./perfilUsuario.php" class="dropdown-item">Meu perfil</a>
                <a href="./logout.php" class="dropdown-item">Sair</a>
            </div>
        </div>
    </div>

    <!-- <div class="dropdown-menu-left">
            <img src="php
                        if (false) {
                            echo $_SESSION['usuario']['foto'];
                        } else {
                            echo "../Public/Imagens/ImagemUsuario.png";
                        }
                        ?>" alt="Foto do usuário" class="imagemUsuario dropdown-toggle" id="imagemUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="dropdown-menu" aria-labelledby="imagemUsuario">
                <a href="./perfilUsuario.php" class="dropdown-item">Meu perfil</a>
                <a href="./logout.php" class="dropdown-item">Sair</a>
            </div>
        </div>
    </div> -->
</nav>
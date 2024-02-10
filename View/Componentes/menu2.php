 <header>
        <nav class="menu">
            <ul class="logo">
                <li><a href="./pagina-inicial.php"><img src="./../Public/Imagens/LogoExplore.png" alt="Logo"></a></li>
                <li>
                    <h6><a href="./pagina-inicial.php">Comunidade-Explore</a></h6>
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
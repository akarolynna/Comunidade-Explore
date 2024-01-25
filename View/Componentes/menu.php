
<nav class="menu">
    <div class="grupo">
        <img src="../Public/Imagens/LogoExplore.png" alt="Logo de bussola" class="logo">
        <h1 class="titulo">Comunidade Explore</h1>
    </div>
    <div class="grupo">
        <button class="btn btn-success btn-sm botao">Criar publicação</button>

        <div class="dropdown-menu-left">
            <img src="<?php
                if(false) {
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
    </div>
</nav>

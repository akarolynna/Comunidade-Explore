<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/CSS/PerfilUsuario.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Meu Perfil</title>
</head>

<body>
    <article>
        <div class="imagem-usuario">
            <div class="imagemPerfil">
                <img src="<?php echo $_SESSION['usuario']['foto']; ?>" alt="Foto do usuário" class="imagemUsuario dropdown-toggle" id="imagemUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </div>
        </div>
        <div class="informacoes-usuario">
            <div class="tituloInformacoesUsuario">
                <h3>Sobre: </h3><!-- <span>php echo  $_SESSION['usuario']['email']; ?></span> -->
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
                <img src="../Public/Imagens/IconGmail.png" alt="Ícone do Instagram por Icons8">
            </div>

            <div class="grupoInformacoes">
                <button type="button" class="botaoEditarPerfil">Editar Perfil</button>
            </div>
        </div>
        <div class="apresentacao-usuario">
            <div class="titulo-apresentacao">
                <h1>Anna Karolynna</h1><!-- <span>php echo  $_SESSION['usuario']['email']; ?></span> -->
            </div>

            <div class="botaoTipoAventureiro">
                <button type="button" class="botaoTipoAventureiro"> Mochileira Novata </button>
            </div>

            <div class="apresentacao">
                <p> Olá, exploradores do mundo! Eu sou a Anna, e minha paixão por desbravar o planeta vai além das fronteiras geográficas, permitindo-me mergulhar em cada cultura que encontro.
                    Como uma viajante com espírito aventureiro, busco incessantemente novas experiências, que vão desde trilhas desafiadoras nas majestosas montanhas até momentos de pura tranquilidade em praias paradisíacas. A habilidade de me
                    comunicar em diversos idiomas, como inglês, frances e espanhol, acrescenta uma dimensão extra ás minhas viagens, tornando cada jornada ainda mais emocionante.
                </p>
            </div>
        </div>
        <div class="cards">
            <div class="menuHorizontal active">
                <ul>
                    <li><a href="#">Minhas Contribuições</a></li>
                    <li><a href="#">Diários de Viagem</a></li>
                    <li><a href="#">Meus Desafios</a></li>
                    <li><a href="#">Meus Eventos</a></li>
                    <li><a href="#">Salvos</a></li>
                </ul>
                <hr>
            </div>
            <div class="cartoes">
                <div class="card1">
                    <p>Diário de Viagem - Costa Rica 2024</p>
                </div>
                <div class="card2">
                    <p>Diário de Viagem - Itália 2020</p>
                </div>
                <div class="card3">
                    <p>Diário de Viagem - NovaYork 2020</p>
                </div>
                <div class="card4">
                    <p>Diário de Viagem - Portugal 2021</p>
                </div>
                <div class="card5">
                    <p>Diário de Viagem - Israel 2021</p>
                </div>
                <div class="card6">
                    <p>Diário de Viagem - Canadá 2021</p>
                </div>
                <div class="card7">
                    <p>Diário de Viagem - China 2022</p>
                </div>
                <div class="card8">
                    <p>Diário de Viagem - Curitiba 2023</p>
                </div>
                <div class="card9">
                    <p>Diário de Viagem - Alemanha 2023</p>
                </div>
            </div>
        </div>
        <div class="modalEditarUsuario" id="modalEditarUsuario"></div>
    </article>
    <script src="../Public/JS/perfil-usuario.js"></script>
</body>

</html>
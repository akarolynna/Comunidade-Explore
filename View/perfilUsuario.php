<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/CSS/PerfilUsuario.css">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/modalEditarUsuario.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Meu Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Public/CSS/Modal/modalCriarDiario.css">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/menu2.css">
</head>

<body>
    <?php require_once './Componentes/menu2.php'; ?>
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
                <button type="button" class="botaoEditarPerfil" id="btnEditarPerfil">Editar Perfil</button>
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
                    <li><button type="button" id="btnMinhasContribuicoes">Minhas Contribuições</button></li>
                    <li><button type="button" id="btnDiarioViagem">Diários de Viagem</button></li>
                    <li><button type="button" id="btnMeusGuias">Meus Guias</button></li>
                    <li><button type="button" id="btnMeusEventos">Meus Eventos</button></li>
                    <li><button type="button" id="btnSalvos">Salvos</button></li>
                </ul>
                <hr>
            </div>
            <div class="containnerCards" id="containnerCards">

                <!-- <div class="card1">
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
            </div> -->

            </div>

    </article>
    <div class="modalEditarUsuario" id="modalEditarUsuario"></div>
    <div class="modalDiarioViagem" id="modalEditarUsuario"></div>
    <div id="overlay" class="overlay"></div>

</body>
<script src="../Public/JS/modalFormEdit-usuario.js"></script>
<script src="../Public/JS/menu-perfilUsuario.js"></script>
<script src="../Public/JS/opcoesDiario.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
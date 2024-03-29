<?php
session_start();
// var_dump($_SESSION['usuario'])
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
                <img alt="Foto do usuário" class="imagemUsuario dropdown-toggle" id="imagemUsuario">
            </div>
        </div>
        <div class="informacoes-usuario">
            <div class="tituloInformacoesUsuario">
                <h3>Sobre: </h3><!-- <span>php echo  $_SESSION['usuario']['email']; ?></span> -->
            </div>

            <div class="grupoInformacoes">
                <label for="aniversario">Aniversário:</label>
                <span id="spanAniversario"> </span>
            </div>

            <div class="grupoInformacoes">
                <label for="destinoFav">Destino Favorito:</label>
                <span id="melhorViagem"> </span>
            </div>

            <div class="grupoInformacoes">
                <label for="redesSociais">Redes Sociais: </label>
                <a id="Linkinstagram"> <img src="../Public/Imagens/iconeInstagram.png" alt="Ícone do Instagram por Icons8"></a>
                <a id="LinkGmail"><img src="../Public/Imagens/IconGmail.png" alt="Ícone do Instagram por Icons8"></a>
            </div>

            <div class="grupoInformacoes">
                <button type="button" class="botaoEditarPerfil" id="btnEditarPerfil">Editar Perfil</button>
            </div>
        </div>
        <div class="apresentacao-usuario">
            <div class="titulo-apresentacao">
                <h1 id="nomeUsuario"></h1><!-- <span>php echo  $_SESSION['usuario']['email']; ?></span> -->
            </div>

            <div class="botaoTipoAventureiro">
                <button type="button" class="botaoTipoAventureiro"> Mochileira Novata </button>
            </div>

            <div class="apresentacao">
                <p id="apresentacao"></p>
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


            </div>
            <div id="membroId" data-id="<?php echo $_SESSION['usuario']['id']; ?>"></div>
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
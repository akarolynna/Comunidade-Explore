<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/menu2.css">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/detalhesDiarioViagem.css">
    <title>Comunidade Explore</title>
</head>

<body>
    <?php require_once './Componentes/menu2.php'; ?>
    <article>
        <section class="secaoCapa" id="secaoCapa">
            <div class="textos">
                <h1 class="tituloMaior" id="nomeDestino"></h1>
                <div class="localizacaoContainer">
                    <img src="../Public/Imagens/icons8-location-48.png" class="btnLocalizacaoImg" alt="Ícone de localizacao">
                    <p class="localizacao" id="localizacao"></p>
                </div>
            </div>
            <div class="botoes">
                <button class="btn botaoAdd" id="botaoAddPost">Add Post</button>
                <button class="btn bbotaoEditar" id="botaoEditar">Editar</button>
                <button class="btn btn-danger" id="botaoExcluir">Exluir</button>
            </div>
        </section>

        <session class="posts">
            <div class="post">
                <div class="imagens">
                    <div class="imagem-fundo">
                        <img src="../Public/Imagens/fotosDiarioViagem/nuno-alberto-MykFFC5zolE-unsplash.jpg" alt="" srcset="">
                    </div>
                    <div class="imagem-frente">
                        <img src="../Uploads/Parque da Disney-guia-castelo-cinderela-inspiracao-819x1024.jpg.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="textos">
                    <h1 class="tituloPost">Um Encontro com a Tradição: Meu Dia em Asakusa, Tóquio </h1>
                    <p class="descricaoPost"> Hoje, mergulhei na rica cultura japonesa enquanto explorava as ruas de Asakusa, um bairro encantador em Tóquio. Ao atravessar o famoso portão vermelho de Kaminarimon, fui recebido por uma atmosfera de serenidade e história. Passeando pela Nakamise-dori, uma rua repleta de lojas tradicionais, maravilhei-me com a variedade de lembranças e iguarias locais. Não pude deixar de visitar o magnífico Senso-ji, um dos templos mais antigos da cidade, onde deixei uma oração e admirei a beleza arquitetônica que resistiu ao teste do tempo. Em cada esquina, uma nova descoberta me aguardava, desde os cheiros tentadores dos restaurantes até os sons suaves dos sinos do templo.</p>
                </div>
            </div>
        </session>

    </article>
</body>
<script src="../Public/JS/detalhesDiarioViagem.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
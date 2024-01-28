<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade Explore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href='../Public/CSS/Menu.css'>
    <link rel="stylesheet" href='../Public/CSS/DetalhesGuia.css'>

</head>

<body class="pagina">
    <?php
        require_once './Componentes/menu.php';
    ?>

    <div class="blocoPrincipal">
        <section class="secaoCapa">
            <div class="filtro">
                <div class="tituloContainer">
                    <h1 class="tituloMenor">Bem vindo a</h1>
                    <h1 class="tituloMaior">Costa Dourada</h1>
                    <div class="localizacaoContainer">
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="localizacao">Região Costeira do Nordeste, Brasil.</p>
                    </div>
                </div>
                <button class="btn botaoPrimario">Seguir</button>
            </div>
        </section>
        <section class="secaoSobre">
            <div class="infoContainer">
                <h2 class="subtitulo">Sobre Costa Dourada</h2>
                <p>
                    Explore a deslumbrante Costa Dourada, um trecho de paraíso tropical onde as areias douradas se encontram com as águas cristalinas. Esta região costeira oferece uma fusão perfeita de relaxamento à beira-mar e aventuras emocionantes. De praias serenas a uma rica cultura local, a Costa Dourada é um destino para todos os viajantes em busca de sol, mar e momentos inesquecíveis.
                </p>
            </div>
            <div class="imagensContainer">
                <img src="../Public/ImagensGuia/fotoDestino1.png" alt="foto do destino" class="imagem imagemCanto">
                <img src="../Public/ImagensGuia/fotoDestino2.png" alt="foto do destino" class="imagem imagemCentro">
                <img src="../Public/ImagensGuia/fotoDestino3.png" alt="foto do destino" class="imagem imagemCanto">
            </div>
        </section>
        <section class="secaoClima">
            <p class="containerEsquerda">
                O clima tropical da Costa Dourada oferece temperaturas agradáveis durante todo o ano. Verões quentes proporcionam dias ensolarados perfeitos para atividades à beira-mar, enquanto invernos suaves mantêm um clima agradável para explorar a região.
            </p>
            <img src="../Public/Imagens/separadorBussola.png" alt="separador de bussola" class="separador">
            <p class="containerDireita">
                A melhor época para visitar a Costa Dourada é durante os meses de abril a setembro, quando o clima está mais estável e as atividades ao ar livre são ideais. No entanto, os viajantes que preferem uma atmosfera mais tranquila podem considerar a visita durante a entressafra, de outubro a março.
            </p>
        </section>
        <section class="secaoCultura">
            <h2 class="subtitulo">Cultura e História</h2>
            <p class="info">
                A Costa Dourada, aninhada na região costeira do Nordeste do Brasil, é um tesouro cultural onde diversas influências se encontram. Sua rica história é narrada através de uma arquitetura encantadora, festivais vibrantes e uma fusão única de tradições indígenas, africanas e europeias. As coloridas casas à beira-mar e as expressões artísticas, como o maracatu e o forró, refletem a vitalidade da cultura local. Além disso, a Costa Dourada destaca-se por sua gastronomia, com pratos à base de frutos do mar frescos e sabores tropicais que proporcionam uma experiência culinária verdadeiramente cativante. A costa também guarda vestígios de sua história marítima, evidenciada por antigas fortalezas e faróis que contam histórias de tempos passados e batalhas no mar, tornando-a não apenas uma joia natural, mas um destino enriquecido por sua herança cultural.
            </p>
            <p class="info">
                Ao explorar a Costa Dourada, os visitantes são convidados a imergir não apenas nas águas cristalinas e areias douradas, mas também na autenticidade de uma cultura que ressoa ao longo dos séculos. A região celebra sua identidade através de festivais vibrantes, manifestações artísticas e uma culinária que é um verdadeiro deleite para os sentidos. Com uma arquitetura encantadora que conta histórias do passado e uma conexão profunda com o mar, a Costa Dourada oferece aos viajantes uma experiência única e memorável, onde cada praia é um capítulo na rica narrativa desse destino costeiro.
            </p>
        </section>
        <section class="secaoAreaContribuicao">
            <div class="conteudo">
                <h2 class="subtitulo">Pontos Turísticos</h2>
                <p>
                    Descubra o lado aventureiro do seu destino favorito! Explore as atividades que farão seu coração acelerar e trarão uma nova dimensão à sua viagem. Se você já teve uma experiência emocionante, compartilhe suas histórias e dicas para inspirar outros exploradores
                </p>
                <div class="botoesContainer">
                    <button class="btn botaoPrimario">Explorar</button>
                    <button class="btn botaoSecundario">Contribuir</button>
                </div>
            </div>
            <img src="../Public/Imagens/areaContribuicaoPontosTuristicos.png" alt="itens de aventureiro" class="imagem">
        </section>
        <section class="secaoAreaContribuicao">
            <img src="../Public/Imagens/areaContribuicaoHospedagem.png" alt="beliche - hospedagem" class="imagem">
            <div class="conteudo">
                <h2 class="subtitulo">Hospedagem</h2>
                <p>
                    Encontre o refúgio perfeito para a sua estadia dos sonhos! Nesta seção, mergulhe em recomendações cuidadosamente selecionadas de hotéis, pousadas e locações encantadoras. Compartilhe suas experiências de hospedagem para ajudar outros viajantes a escolherem o lugar perfeito.
                </p>
                <div class="botoesContainer">
                    <button class="btn botaoPrimario">Explorar</button>
                    <button class="btn botaoSecundario">Contribuir</button>
                </div>
            </div>
        </section>
        <section class="secaoAreaContribuicao">
            <div class="conteudo">
                <h2 class="subtitulo">Esportes e Aventuras</h2>
                <p>
                    Descubra o lado aventureiro do seu destino favorito! Explore as atividades que farão seu coração acelerar e trarão uma nova dimensão à sua viagem. Se você já teve uma experiência emocionante, compartilhe suas histórias e dicas para inspirar outros exploradores
                </p>
                <div class="botoesContainer">
                    <button class="btn botaoPrimario">Explorar</button>
                    <button class="btn botaoSecundario">Contribuir</button>
                </div>
            </div>
            <img src="../Public/Imagens/areaContribuicaoAventura.png" alt="itens de aventureiro" class="imagem">
        </section>
    </div>
</body>

<footer class="rodape">
    <div class="tituloContainer">
        <img src="../Public/Imagens/LogoExplore.png" alt="LogoExplore - bussola" class="tituloImagem">
        <h3 class="titulo">Explore - Costa Dourada</h3>
    </div>
    <div class="conteudoContainer">
        <div class="conteudo infoNumerosContainer">
            <div class="infoNumerosContent">
                <span class="numero">87</span>
                <span class="legenda">Seguidores</span>
            </div>
            <div class="separador"></div>
            <div class="infoNumerosContent">
                <span class="numero">12</span>
                <span class="legenda">Contribuidores</span>
            </div>
        </div>
        <div class="conteudo infoPessoas">
            <span>Criado por:</span>
            <div class="criadorContainer">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="imagem do usuário" class="pessoaImagem">
                <span class="nomeCriador">Anna Karolynna</span>
            </div>
            <span>Colaboradores:</span>
            <div class="colaboradores">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="imagem do usuário" class="pessoaImagem">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="imagem do usuário" class="pessoaImagem">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="imagem do usuário" class="pessoaImagem">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="imagem do usuário" class="pessoaImagem">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="imagem do usuário" class="pessoaImagem">
            </div>
        </div>        
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
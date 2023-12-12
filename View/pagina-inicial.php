<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade Explore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href='../Public/CSS/PaginaInicial.css'>
</head>
<body class="pagina">
    <nav class="menu">
        <div class="grupo">
            <img src="../Public/Imagens/LogoExplore.png" alt="Logo de bussola" class="logo">
            <h1 class="titulo">Comunidade Explore</h1>
        </div>
        <div class="grupo">
            <button class="btn btn-success btn-sm botao">
                Criar publicação
            </button>
            <img src="../Public/Imagens/ImagemUsuario.png" alt="Imagem do usuário" class="imagemUsuario">
        </div>
    </nav>

    <div class="blocoPrincipal">
        <form class="formPesquisa">
            <div class="input-group mb-3">
                <input type="text" class="form-control inputPesquisa" placeholder="Pesquisar">
                <div class="input-group-append">
                    <button class="botaoPesquisa">
                        <img src="../Public/Imagens/IconePesquisa.png" alt="Icone de pesquisa">
                    </button>
                </div>
            </div>
        </form>

        <div class="blocoCategorias">
            <h2 class="titulo">Categorias</h2>
            <div class="opcoesCategorias">
                <div class="itemCategoria">
                    <div class="imagemCategoria"></div>
                    <p class="nomeCategoria">Praia</p>
                </div>
                <div class="itemCategoria">
                    <div class="imagemCategoria"></div>
                    <p class="nomeCategoria">Neve</p>
                </div>
                <div class="itemCategoria">
                    <div class="imagemCategoria"></div>
                    <p class="nomeCategoria">Montanhas</p>
                </div>
                <div class="itemCategoria">
                    <div class="imagemCategoria"></div>
                    <p class="nomeCategoria">Esportes</p>
                </div>
                <div class="itemCategoria">
                    <div class="imagemCategoria"></div>
                    <p class="nomeCategoria">Natureza</p>
                </div>
                <div class="itemCategoria">
                    <div class="imagemCategoria"></div>
                    <p class="nomeCategoria">História</p>
                </div>
            </div>
        </div>

        <div class="blocoPosts">
            <div class="menuPosts">
                <a href="" class="itemMenuPosts titulo">Diários</a>
                <a href="" class="itemMenuPosts titulo">Eventos</a>
                <a href="" class="itemMenuPosts titulo">Guias</a>
            </div>    
        
            <div class="listaPosts">
                <div class="post">
                    <p class="conteudoPost">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia et harum laudantium fugiat quidem, quisquam, magni cumque ratione possimus dolorem quo iste totam error, explicabo aut aliquid. Aut, sit quam.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
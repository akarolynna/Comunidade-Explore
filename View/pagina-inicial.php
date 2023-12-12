<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade Explore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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

            <div class="dropdown-menu-left">
                <img src="../Public/Imagens/ImagemUsuario.png" alt="Imagem do usuário" class="imagemUsuario dropdown-toggle" id="imagemUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <div class="dropdown-menu" aria-labelledby="imagemUsuario">
                    <a href="#" class="dropdown-item">Meu perfil</a>
                    <a href="./logout.php" class="dropdown-item">Sair</a>
                </div>
            </div>
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
        
            <div class="listaPosts" id="posts">
                <div class="post">
                    <p class="conteudoPost">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia et harum laudantium fugiat quidem, quisquam, magni cumque ratione possimus dolorem quo iste totam error, explicabo aut aliquid. Aut, sit quam.
                    </p>
                </div>
                <div class="post">
                    <p class="conteudoPost">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia et harum laudantium fugiat quidem, quisquam, magni cumque ratione possimus dolorem quo iste totam error, explicabo aut aliquid. Aut, sit quam.
                    </p>
                </div>
                <div class="post">
                    <p class="conteudoPost">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia et harum laudantium fugiat quidem, quisquam, magni cumque ratione possimus dolorem quo iste totam error, explicabo aut aliquid. Aut, sit quam.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="../Public/JS/pagina-inicial.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
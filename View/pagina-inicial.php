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
                <?php
                    require_once "../Model/Categoria.enum.php";
                    $i = -1;
                    do {
                        $i++;
                        $categoria = Categoria::getNome($i);
                        echo 
                            "<div class='itemCategoria' id='categoria$categoria'>
                                <div class='imagemCategoria'>                        
                                    <img src='../Public/Imagens/Categoria$categoria.jpg' alt='$categoria'>
                                </div>
                                <p class='nomeCategoria'>$categoria</p>
                            </div>";

                    } while($categoria != null);
                ?>
            </div>
        </div>

        <div class="blocoPosts">
            <div class="menuPublicacoes">
                <p class="itemMenuPublicacoes titulo itemMenuAtivo" id="diarios">Diários</p>
                <p class="itemMenuPublicacoes titulo" id="eventos">Eventos</p>
                <p class="itemMenuPublicacoes titulo" id="guias">Guias</p>
            </div>    
            <div id="publicacoes"></div>
        </div>
    </div>
</body>

<script src="../Public/JS/pagina-inicial.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
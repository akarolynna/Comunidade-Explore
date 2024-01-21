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
    <link rel="stylesheet" href='../Public/CSS/PaginaInicial.css'>
    <link rel="stylesheet" href='../Public/CSS/Evento.css'>
</head>

<body class="pagina">
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

    <div class="blocoPrincipal">
        <div class="input-group mb-3">
            <input type="text" class="form-control inputPesquisa" placeholder="Pesquisar" id="inputPesquisa">
            <div class="input-group-append" id="botaoPesquisa">
                <button class="botaoPesquisa">
                    <img src="../Public/Imagens/IconePesquisa.png" alt="Icone de pesquisa">
                </button>
            </div>
        </div>

        <div class="blocoCategorias">
            <h2 class="titulo">Categorias</h2>
            <div class="opcoesCategorias">
                <?php
                require_once "../Model/Categoria.enum.php";
                $i = 0;
                $categoria = Categoria::getNome($i);
                while ($categoria != null) {
                    echo
                    "<div class='itemCategoria' id='categoria$categoria'>
                                <div class='imagemCategoria'>                        
                                    <img src='../Public/Imagens/Categoria$categoria.jpg' alt='$categoria'>
                                </div>
                                <p class='nomeCategoria'>$categoria</p>
                            </div>";

                    $i++;
                    $categoria = Categoria::getNome($i);
                }
                ?>
            </div>
        </div>

        <div class="blocoPosts">
            <div class="menuPublicacoes">
                <p class="itemMenuPublicacoes titulo itemMenuAtivo" id="diarios">Diários</p>
                <p class="itemMenuPublicacoes titulo" id="eventos">Eventos</p>
                <p class="itemMenuPublicacoes titulo" id="guias">Guias</p>
            </div>
            <div id="publicacoes">

                <!-- <div class="post">
                    <div class="imagemPost">
                        <img src="../Public/Imagens/CategoriaPraia.jpg" alt="Imagem do Post">
                    </div>
                    <div class="conteudoPost">
                        <div class="cabecalhoPost">
                            <div class="criadorPost">
                                <img src="../Public/Imagens/ImagemUsuario.png" alt="Foto do autor">
                                <p>Anna Carolina</p>
                            </div>
                            <p>20 out 2023</p>
                        </div>
                        <h3 class="tituloPost mt-3">Título do Diario de Viagem</h3>
                        <p class="mt-3 descricaoPost">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, laudantium iste similique non animi rerum maiores saepe. Tempora veritatis rerum, delectus dignissimos illum, eum quo sint perferendis ea veniam natus.
                        </p>
                        <div class="teste">
                            <i class="corCinzaClaro cursorPointer far fa-heart fa-lg"></i>
                            <p class="corCinzaClaro ml-2 mr-4">152</p>
                            <i class="corCinzaClaro cursorPointer far fa-comment fa-lg"></i>
                            <p class="corCinzaClaro ml-2 mr-4">152</p>
                            <i class="corCinzaClaro cursorPointer far fa-bookmark fa-lg"></i>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="eventoCard">

                </div> -->
            </div>
        </div>
    </div>
</body>

<script src="../Public/JS/pagina-inicial.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
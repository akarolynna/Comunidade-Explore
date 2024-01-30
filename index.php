<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Public/CSS/Index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Seja Bem-Vindo</title>
</head>

<body>

  <header>
    <nav class="menu">
      <ul class="logo">
        <li><img src="./Public/Imagens/LogoExplore.png" alt="Logo"></li>
        <li>
          <h6><a> Comunidade-Explore<a> </h6>
        </li>
      </ul>
      <ul class="menu-list">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./View/saiba-mais.php">Saiba Mais</a></li>
        <li><a href="./View/desenvolvedores.php">Desenvolvedores</a></li>
      </ul>
    </nav>
  </header>
  <article>
    <section class="containnerPricipal">
      <div class="divTextos">
        <div class="titulo">
          <h1><a>Comece sua  Jornada</a></h1>
        </div>
        <div class="mensagem">
          <p>Bem-vindo ao nosso espaço virtual dedicado a amantes de viagens, onde novatos e experientes trocam ideias, compartilham roteiros e vivenciam histórias inspiradoras. </p>
        </div>
        <div class="botao">
          <button onclick="location.href='./View/login.php'" class="btn botaoLogin mb-2">Login</button>
          <button onclick="location.href='./View/cadastro.php'" class="btn botaoCadastro mb-2">Cadastre-se</button>
        </div>
      </div>
      <div class="divImagem">
        <img src="./Public/Imagens/ApresentacaoSite.jpg" alt="Imagem Principal">
      </div>
    </section>
  </article>
</body>

</html>
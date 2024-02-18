<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Public/CSS/Cadastro.css">
    <title>Comunidade-Explorer Cadastro</title>
</head>

<body>
    <section class="containnerTodo">
        <div class="imagem imagemCad" id="imagemCad">
            <img src="../Public/Imagens/CadastroImagem.jpg" alt="Canal de Veneza">
        </div>
        <div class="conteudo" id="conteudo">
            <h1 class="titulo">Bem Vindo </h1>
            <p class="fraseBoaV"> Crie uma conta pessoal:</p>

            <form id="formularioMembro" class="formulario" enctype="multipart/form-data" method="post">
                <label for="foto">Foto</label><br>
                <input type="file" class="form-control-file" id="foto" name="foto" required><br>

                <label for="nome">Nome</label><br>
                <input type="nome" class="form-control" id="nome" name="nome" aria-describedby="nome" placeholder="Nome" required>

                <label for="E-mail">Email</label><br>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu email" required>

                <label for="senha">Senha</label><br>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>

                <div class="btnCentralizar">
                    <input type="hidden" name="_acao" value="cadastro"> <!-- Adicione o campo acao -->
                    <button type="button" class="btn botaoCad mb-2" id="cadastrarMembro">Cadastre-se</button>
                </div>

            </form>
            <p><a href="login.php" class="linkEstilo">Já possui cadastro? <span class="destaque">Login</span></a></p>
        </div>
    </section>
</body>
<script src="../Public/JS/cadastroMembro.js"></script>

</html>
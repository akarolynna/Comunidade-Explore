<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Public/CSS/Login.css">
    <title>Comunidade-Explorer Login</title>
</head>

<body>
    <section class="containnerLogin">
        <div class="imagem imagemLogin" id="imagemLogin">
            <img src="../Public/Imagens/LoginImagem.jpg" alt="Grecia">
        </div>
        <div class="conteudo" id="conteudo">
            <h1 class="titulo"><a>Olá <a></h1>
            <p class="fraseBoaV"><a> Entre com sua conta pessoal!</a></p>

            <form id="formularioMembro" action="../Controller/MembroController.class.php" enctype="multipart/form-data" class="formulario" method="post">
                <label for="E-mail">Email</label><br>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu email"><br>

                <label for="senha">Senha</label><br>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"><br>

                <div class="btnCentralizar">
                    <input type="hidden" name="_acao" value="login"> <!-- Adicione o campo acao -->
                    <button type="submit" class="btn botaoLogin mb-2">Entrar</button>
                </div>

            </form>
            <p><a href="cadastro.php" class="linkEstilo">Ainda não possui conta? <span class="destaque">Cadastre-se</span></a></p>
        </div>
    </section>
</body>


</html>
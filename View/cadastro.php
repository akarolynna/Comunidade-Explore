<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Public/CSS/Cadastro.css">
    <title>Comunidade Explorer Cadastro</title>
</head>

<body>
    <section class="containnerTodo">
        <div class="imagem" id="imagem">
            <img src="../Public/Imagens/CadastroImagem.jpg" alt="Canal de Veneza">
        </div>
        <div class="conteudo" id="conteudo">
            <h1 class="titulo">Bem Vindo </h1>
            <p class="fraseBoaV"> Crie uma conta pessoal:</p>

            <form id="formularioMembro" action="../Controller/MembroController.class.php" enctype="multipart/form-data" class="formulario" method="post" >
                <label for="foto">Foto:</label><br>
                <input type="file" class="form-control-file" id="foto" name="foto"><br>
                <label for="E-mail">Email</label><br>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu email"><br>

                <label for="senha">Senha</label><br> 
                <input type="password" class="form-control" id="senha" name ="senha" placeholder="Senha"><br>

                <label for="ConfSenha">Confirmação da Senha</label><br>
                <input type="password" class="form-control" id="confSenha" placeholder="Senha"><br>

                <!-- Adicione o campo acao -->

               <input type="hidden" name="acao" value="cadastro">
                <button type="submit" class="btn botaoCad mb-2">Cadastre-se</button>
            </form>
            <p><a href="login.php" class="linkEstilo">Já possui cadastro? Login</a></p>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
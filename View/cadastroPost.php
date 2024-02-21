<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/CSS/menu2.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css"  href='../Public/CSS/CadastroGeral.css'>
    <!-- <link rel="stylesheet"type="text/css"   href='../Public/CSS/cadastroPost.css'> -->
    <title>Cadastrar Post Diário de Viagem</title>
</head>
<div class="blocoPrincipal">
    <h1 class="classTitulo">Cadastrar Post</h1>

    <div class="Divformulario">
        <form method="post" enctype="multipart/form-data" id="formCadastroPost">
            <label for="titulo">Título:</label><br>
            <input type="text" id="titulo" name="titulo" required class="form-control-file"><br>

            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao" rows="4" maxlength="255" class="form-control-file" required></textarea><br>

            <div class="divImagens">
                <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria1" name="fotoSecundaria1">
                <input type="hidden" id="inputHiddenFotoSecundaria1" name="fotoSecundaria1Edicao">
                <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria2" name="fotoSecundaria2">
                <input type="hidden" id="inputHiddenFotoSecundaria2" name="fotoSecundaria2Edicao">
                <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria3" name="fotoSecundaria3">
                <input type="hidden" id="inputHiddenFotoSecundaria3" name="fotoSecundaria3Edicao">
                <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria4" name="fotoSecundaria4">
                <input type="hidden" id="inputHiddenFotoSecundaria4" name="fotoSecundaria4Edicao">
                <input type="file" class="form-control-file mt-2" id="inputFotoSecundaria5" name="fotoSecundaria5">
                <input type="hidden" id="inputHiddenFotoSecundaria5" name="fotoSecundari5Edicao">
            </div>

            <div class="divBotao">
                <button type="submit" class="btn botaoEnviar" id="cadastrarPost">Enviar</button>
                <button class="btn btnSecundary mx-2" id="btnCancelar">Cancelar</button>
            </div>
        </form>
    </div>
</div>

</body>
<script src="../Public/JS/cadastrarPost.js"></script>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comunidade Explore</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href='../Public/CSS/Menu.css'>
        <link rel="stylesheet" href='../Public/CSS/CadastroGeral.css'>
        <link rel="stylesheet" href='../Public/CSS/InputHora.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

    </head>

<body>

    <body class="pagina">
        <?php
        require_once './Componentes/menu.php';
        ?>

        <div class="blocoPrincipal cadastroViagem">
            <h2 class="titulo">Crie um Diário de Viagem</h2>
            <form id="formCadEvento">
                <div class="inputContainer">
                    <label class="label" for="inputTitulo">Título</label>
                    <input class="form-control" id="inputTitulo" name="titulo" required>
                </div>
                <div class="inputContainer">
                    <label class="label" for="inputLocalizacao">Localização</label>
                    <input class="form-control" id="inputLocalizacao" name="localizacao" required>
                </div>
                <div class="inputContainer mt-3">
                    <label for="inputFotoCapa">Foto de capa</label>
                    <br>
                    <input type="file" class="form-control-file" id="inputFotoCapa" name="fotoCapa">
                </div>
                <div class="d-flex justify-content-center mt-5 buttonContainer">
                    <input type="hidden" name="_acao" value="login"> <!-- Adicione o campo acao -->
                    <button class="btn btnSecundary mx-2" id="btnCancelar">Cancelar</button>
                    <button class="btn btnPrimary" id="btnPublicar">Publicar</button>
                </div>
            </form>
    </body>

</html>
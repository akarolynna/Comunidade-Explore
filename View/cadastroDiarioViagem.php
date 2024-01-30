<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href='../Public/CSS/Menu.css'>
     <link rel="stylesheet" type="text/css" href="../Public/CSS/CadastroDiarioViagem.css">
   
    <title>Comunidade Explore</title>
</head>

<body class="pagina">
    <?php        
        require_once './Componentes/menu.php';
    ?>

    <article>
        <div class="containnerPrincipal">
            <div class="cabecalho">
                <h1 class="titulo">Crie um Diário de Viagem</h1>
            </div>

            <div class="corpo">
            <div class="form-group">
                <label for="titulo"><b>Título:</b> </label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="localizacao"><b>Localização:</b></label>
                <input type="text" name="localizacao" id="localizacao" class="form-control" required>
            </div>

            <div class="form-group-capa">
                <label for="foto"><b>Capa:</b></label>
                <input type="file" name="foto" accept="image/*" id="foto" class="custom-file-input" required>
            </div>

            <div class="divBotaoEditar">
                <button type="submit" id="salvarDiarioDeViagem">Salvar </button>
                <button type="button">Cancelar</button>
            </div>

        </div>
        </div>
    </article>

</body>

</html>
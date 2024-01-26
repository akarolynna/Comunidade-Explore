<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/modalEditarUsuario.css">
    <title>Editar Perfil</title>
</head>

<body>
    <div class="modalEditar">
        <div class="modalCabecalho">
            <h1 class="titulo">Editar Perfil</h1>
            <button type="button" class="fechar" data-dismiss="modalFechar" aria-label="Fechar"><span aria-hidden="true">X</span></button>
        </div>
        <div class="modalCorpo">
            <form method="POST" id="formularioEdicao">
                <div class="form-group-imagem">
                    <label for="mudarImagem"><b>Mudar Imagem:</b> </label>
                    <input type="file" class="form-control-file" id="foto">
                </div>

                <div class="form-group">
                    <label for="nomeMembro"><b>Nome:<b> </label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome de usuário" required>
                </div>

                <div class="form-group">
                    <label for="aniversario">Aniversário: </label>
                    <input type="text" name="aniversario" id="aniversario" class="form-control" placeholder="Seu aniversário">
                </div>

                <div class="form-group">
                    <label for="melhor_viagem">Melhor Viagem: </label>
                    <input type="text" name="melhor_viagem" id="melhor_viagem" class="form-control" placeholder="Seu destino favorito">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram: </label>
                    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Seu instagram">
                </div>

                <div class="form-group">
                    <label for="email">Email para Contato: </label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Seu email">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone para Contato: </label>
                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Seu telefone">
                </div>

                <div class="form-group">
                    <label for="apresentacao">Descrição: </label>
                    <textarea class="form-control" id="apresentacao" rows="4" maxlength="559" placeholder="Apresente-se" required></textarea>
                </div>

                <div class="divBotaoEditar">
                    <button type="submit" id=enviarFormularioEditar>Salvar Mudança</button>
                </div>
        </div>
        </form>
        <!-- Fechamento do Modal  -->
    </div>
    <div id="overlay" class="overlay"></div>
</body>

</html>
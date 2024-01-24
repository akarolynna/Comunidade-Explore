<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="../Public/CSS/formEditarDadosUsuario.css">
    <title>Form User</title>
</head>

<body>
    <div class="formularioMembro">
        <div class="titulo">
            <h1>Editar Perfil</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="mudarImagem">Mudar Imagem: </label>
                <input type="file" class="form-control-file" id="foto">
            </div>

            <div class="form-group">
                <label for="nomeMembro">Nome: </label>
                <input type="text" name="nomeMembros" id="nomeMembros" class="form-control" placeholder="Nome de usuário"  required>
            </div>

            <div class="form-group">
                <label for="aniversario">Aniversário: </label>
                <input type="text" name="aniversario" id="aniversario" class="form-control" placeholder="Seu aniversário">
            </div>

            <div class="form-group">
                <label for="destinoFavorito">Destino Favorito: </label>
                <input type="text" name="destinoFavorito" id="destinoFavorito" class="form-control" placeholder="Seu destino favorito">
            </div>

            <div class="form-group">
                <label for="instagram">Instagram: </label>
                <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Seu instagram">
            </div>

            <div class="form-group">
                <label for="email">Email para Contato: </label>
                <input type="text" name="email" id="email"  class="form-control" placeholder="Seu email">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone para Contato: </label>
                <input type="text" name="telefone" id="telefone"  class="form-control" placeholder="Seu telefone">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <textarea class="form-control" id="descricao" rows="4" maxlength="559" placeholder="Apresente-se" required></textarea>
            </div>

            <div class="divBotaoEditar">
                <button type="submit" id=botaoEditar>Salvar Mudança</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php session_start(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class="modalEditar" id="modalEditar">
    <div class="modalCabecalho">
        <h1 class="titulo">Editar Perfil</h1>
        <button type="button" id="btnFechar" class="fechar" data-dismiss="modalFechar" aria-label="Fechar"><span aria-hidden="true">X</span></button>
    </div>

    <div class="modalCorpo">
        <form method="POST" id="formularioEdicao" enctype="multipart/form-data">
            <div class="form-group-imagem">
                <label for="foto"><b>Mudar Imagem:</b> </label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>

            <div class="form-group">
                <label for="nome"><b>Nome:<b> </label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="form-group">
                <label for="aniversario">Aniversário: </label>
                <input type="date" name="aniversario" id="aniversario" class="form-control" >
            </div>

            <div class="form-group">
                <label for="melhor_viagem">Melhor Viagem: </label>
                <input type="text" name="melhor_viagem" id="melhor_viagem" class="form-control" >
            </div>

            <div class="form-group">
                <label for="instagram">Instagram: </label>
                <input type="text" name="instagram" id="instagram" class="form-control">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone para Contato: </label>
                <input type="text" name="telefone" id="telefone" class="form-control" >
            </div>

            <div class="form-group">
                <label for="apresentacao">Descrição: </label>
                <textarea class="form-control" name="apresentacao" id="descricao" rows="4" maxlength="559"></textarea>
            </div>

            <div class="divBotaoEditar">
                <input type="hidden" name="_acao" value="editar"> <!-- Adicione o campo acao -->
                <button type="button" id="enviarFormularioEditar">Salvar Mudança</button>

            </div>
    </div>
    </form>
    <!-- Fechamento do Modal  -->
</div>
<!-- Importando o JS para que meu código funcione corretamente -->
<script src="../Public/JS/modalFormEdit-usuario.js"></script>
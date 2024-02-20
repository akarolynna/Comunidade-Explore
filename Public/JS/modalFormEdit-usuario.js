var membroId = document.getElementById('membroId').dataset.id;
$("#btnEditarPerfil").click(abrirFormEdit);
$("#btnFechar").click(fecharForm);
$("#enviarFormularioEditar").click(realizarAjaxAtualizarDados);

$(document).ready(function () {
    exibirDadosUsuario();

});


function abrirFormEdit() {
    $("#modalEditarUsuario").load("../View/Componentes/modalEditarDadosUsuario.php");
    $("#overlay").show();
    $("#modalEditar").show();
    exibirDadosUsuarioFormulario();
}
function fecharForm() {
    $("#overlay").hide();
    $("#modalEditar").hide();

}

function realizarAjaxAtualizarDados() {
    const formEdicao = $('#formularioEdicao');
    const controllerURL = "../Controller/MembroController.class.php?_acao=editar";
    const dados = new FormData($(formEdicao)[0]);
    console.log(dados);
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: controllerURL,
        data: dados,
        processData: false,
        contentType: false,
        success: sucessoAoPublicar,
        error: erroNaRequisicao
    });
}

function sucessoAoPublicar(response) {
    if (response.success) {
        alert("Dados Atualizados com Sucesso");

        $('#formularioEdicao').trigger("reset");
        fecharForm();
        exibirDadosUsuario()
    } else {
        alert("Falha ao atualizar dados");
    }
}

function exibirDadosUsuario() {
    $.ajax({
        url: `../Controller/MembroController.class.php?membroId=${membroId}`,
        method: 'GET',
        dataType: 'JSON',
        success: atualizarPerfilUsuario,
        error: erroNaRequisicao
    });
}

function atualizarPerfilUsuario(response) {
    console.log(response)
    if (response && response[0]) {
        console.log(response[0].foto);
        $('#imagemUsuario').attr('src', response[0].foto);
        $('#imagemPerfil').css('background-image', `url("${response[0].foto}")`);
        $('#spanAniversario').html(response[0].aniversario);
        $('#melhorViagem').html(response[0].melhor_viagem);
        if (response[0].instagram) {
            var instagramUrl = 'https://www.instagram.com/' + response[0].instagram;
            var linkInstagram = $('#Linkinstagram');
            linkInstagram.attr('href', instagramUrl);
        }

        if (response[0].email) {
            var emailUrl = 'mailto:' + response[0].email;
            var linkEmail = $('#LinkGmail');
            linkEmail.attr('href', emailUrl);
        }

        $('#nomeUsuario').html(response[0].nome);
        $('#apresentacao').html(response[0].apresentacao);
    } else {
        alert('Não foi encontrado o Usuário!');
    }
}

function exibirDadosUsuarioFormulario() {
    console.log(membroId);
    $.ajax({
        url: `../Controller/MembroController.class.php?membroId=${membroId}`,
        method: 'GET',
        dataType: 'JSON',
        success: exibirDadosForm,
        error: erroNaRequisicao
    });
}

function exibirDadosForm(response) {
    console.log('Entrou no exibirDadosForm');
    console.log(response);
    console.log("Exibindo dados da descrição");
    console.log(response[0].apresentacao);
    console.log($('#apresentacao').length);
    $('#nome').val(response[0].nome);
    $('#aniversario').val(response[0].aniversario);
    $('#melhor_viagem').val(response[0].melhor_viagem);
    $('#instagram').val(response[0].instagram);
    $('#telefone').val(response[0].telefone);

    $('#descricao').val(response[0].apresentacao);





}
function erroNaRequisicao(xhr, status, error) {
    console.error('ERRO!');
    console.error('XHR:', xhr);
    console.error('Status:', status);
    console.error('Erro:', error);
    console.log('Resposta:', xhr.responseText);
}

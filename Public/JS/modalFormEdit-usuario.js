
$("#btnEditarPerfil").click(abrirFormEdit);
$("#btnFechar").click(fecharForm);
$("#enviarFormularioEditar").click(realizarAjaxAtualizarDados);


// Talvez eu mude o abrirFormEdit para o js da pagina de perfil!!
function abrirFormEdit() {
    $("#modalEditarUsuario").load("../View/Componentes/modalEditarDadosUsuario.php");
    $("#overlay").show();
    $("#modalEditar").show();
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
        atualizarPerfilUsuario(response.dados);
    } else {
        alert("Falha ao atualizar dados");
    }
}

function erroNaRequisicao(xhr, status, error) {
    console.error('ERRO!');
    console.error('XHR:', xhr);
    console.error('Status:', status);
    console.error('Erro:', error);

    console.log('Resposta:', xhr.responseText); // Adicione esta linha para verificar a resposta
}

function atualizarPerfilUsuario(dados) {
    $('#imagemUsuario').attr('src', response[0].foto);
    $('#spanAniversario').html(`${dados[0].aniversario}`);
    $('#melhorViagem').html(`${dados[0].melhor_viagem}`);
   
   
   
    $('#spanAniversario').html(`${dados[0].aniversario}`);
    $('#spanAniversario').html(`${dados[0].aniversario}`);
    $('#spanAniversario').html(`${dados[0].aniversario}`);
    $('#spanAniversario').html(`${dados[0].aniversario}`);
    
}
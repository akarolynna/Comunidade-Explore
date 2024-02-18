$(document).ready(function () {

});

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
    var dadosFormulario = $("#formularioEdicao").serialize();
    $ajax({
        type: "POST",
        dataType: "JSON",
        url: "../Controller/MembroController.class.php",
        data: dadosFormulario,
        success: atualizarDados,
        error: erroNaRequisicao
    });
}

//Em caso de ajax sucess chamar está função
function atualizarDados() {
    console.log(response);
}

//Em caso de ajax error chamar a esta  função
function erroNaRequisicao(xhr, status, error) {
    console.error('ERRO!');
    console.log(xhr.responseText);
    console.error('XHR:', xhr);
    console.error('Status:', status);
    console.error('Erro:', error);
    console.log(data);
}


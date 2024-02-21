$(document).ready(function () {
    exibirDadosMenu();
});

$("#btnOpcaoPublicacaoDiario").click(abrirOpcaoPublicacaoDiario);
$("#btn-novoDiario").click(redicionarNovoDiario);
$("#botaoEvento").click(redirecionarNovoEvento);
$("#botaoGuia").click(redirecionarNovoGuia);
var membroId = document.getElementById('membroId').dataset.id;

function abrirOpcaoPublicacaoDiario() {
    console.log("merda entrou");
    $("#modalEditarUsuario").load("../View/Componentes/modalCriarDiario.php");
    $("#modalCriarPublicacao").hide();
    $("#modalCriarDiario").show();
    $("#overlay").show();
}

function exibirDadosMenu() {
    $.ajax({
        url: `../Controller/MembroController.class.php?membroId=${membroId}`,
        method: 'GET',
        dataType: 'JSON',
        success: exibirInformacoesUsuario,
        error: erroNaRequisicao
    });
}

function exibirInformacoesUsuario(response) {
    console.log('dados do menu');
    console.log(response);
    $('#imgDropDown').attr('src', response[0].foto)

}
function redicionarNovoDiario() {
    window.location.href = './../View/cadastroDiarioViagem.php';
}

function redirecionarNovoEvento() {
    window.location.href = './../View/cadastroEvento.php';
}

function redirecionarNovoGuia() {
    window.location.href = './../View/cadastroGuia.php';
}
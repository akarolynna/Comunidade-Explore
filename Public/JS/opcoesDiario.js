$(document).ready(function () {

});

$("#btnOpcaoPublicacaoDiario").click(abrirOpcaoPublicacaoDiario);
$("#btn-novoDiario").click(redicionarNovoDiario);
$("#botaoEvento").click(redirecionarNovoEvento);
$("#botaoGuia").click(redirecionarNovoGuia);


function abrirOpcaoPublicacaoDiario() {
    console.log("merda entrou");
    $("#modalEditarUsuario").load("../View/Componentes/modalCriarDiario.php");
    $("#modalCriarPublicacao").hide();
    $("#modalCriarDiario").show();
    $("#overlay").show();
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
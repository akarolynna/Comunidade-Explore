$(document).ready(function () {

});

$("#btnOpcaoPublicacaoDiario").click(abrirOpcaoPublicacaoDiario);
$("#btn-novoDiario").click(redicionarNovoDiario);


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
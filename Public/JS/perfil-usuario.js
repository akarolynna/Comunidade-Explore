$(document).ready(function () {

});

$("#btnEditarPerfil").click(abrirFormEdit);


function abrirFormEdit() {
    $("#modalEditarUsuario").load("../View/Componentes/modalEditarDadosUsuario.php");
    $("#overlay").show();
    $("#modalEditar").show();
}
$(document).ready(function () {

});

$("#btnEditarPerfil").click(abrirFormEdit);
$("#btnFechar").click(fecharForm);

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
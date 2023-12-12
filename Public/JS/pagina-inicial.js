$(document).ready(buscarPosts);

function buscarPosts() {
    const controllerUrl = '../Controller/DiarioViagemController.class.php';
    $.ajax({
        url: controllerUrl,
        type: 'GET',
        dataType: 'JSON',
        // beforeSend: mostrarModalAguardar,
        // complete: fecharModalAguardar,
        success: sucessoAoBuscar,
        error: erroNaRequisicao
    });
}

function erroNaRequisicao(error) {
    console.log('ERRO');
    console.log(error);
}

function sucessoAoBuscar(response) {
    console.log('SUCESSO!');
    console.log(response);
}
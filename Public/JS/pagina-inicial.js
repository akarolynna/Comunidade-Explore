$(document).ready(buscarPosts);

function buscarPosts() {
    const controllerUrl = '../Controller/PostController.class.php';
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
    console.log(error.responseText);
}

function sucessoAoBuscar(response) {
    $('#posts').html('');
    response.forEach(post => {
        $('#posts').append(`
            <div class="post">
                <p class="conteudoPost">
                    ${post.conteudo}
                </p>
            </div>`);
    });
}
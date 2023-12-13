$(document).ready(
    function() {
        $('#categoriaTodos').addClass('categoriaAtiva');
        buscarPosts();
    }
);

$('.itemCategoria').click(selecionarCategoria);
$('.itemMenuPublicacoes').click(selecionarTipoPublicacao);

function selecionarCategoria() {
    let categoria = $(this).attr('id');    
    $('.itemCategoria').removeClass('categoriaAtiva');
    $('#' + categoria).addClass('categoriaAtiva');
    buscarPublicacoes();
}

function selecionarTipoPublicacao() {
    let tipo = $(this).attr('id');
    $('.itemMenuPublicacoes').removeClass('itemMenuAtivo');
    $('#' + tipo).addClass('itemMenuAtivo');
    buscarPublicacoes();
}

function buscarPublicacoes() {
    let tipo = $('.itemMenuAtivo').attr('id');
    let categoria = $('.categoriaAtiva').attr('id');
    switch(tipo) {
        case 'diarios':
            buscarPosts(categoria);
            break;
        case 'eventos':
            buscarEventos(categoria);
            break;
        case 'guias':
            buscarGuias(categoria);
            break;
        default:
            console.log('Erro ao buscar publicações: tipo de publicação inválido.');
    }
}







function buscarPosts(categoria) {
    console.log(categoria);
    $.ajax({
        url: '../Controller/PostController.class.php',
        type: 'GET',
        dataType: 'JSON',
        // beforeSend: mostrarModalAguardar,
        // complete: fecharModalAguardar,
        success: sucessoAoBuscarPosts,
        error: erroNaRequisicao
    });
}

function erroNaRequisicao(error) {
    console.log('ERRO');
    console.log(error);
    console.log(error.responseText);
}

function sucessoAoBuscarPosts(response) {
    $('#publicacoes').html('');
    response.forEach(post => {
        $('#publicacoes').append(`
            <div class="post">
                <p>Post</p>
                <p class="conteudoPost">
                    ${post.conteudo}
                </p>
            </div>`);
    });
}

function buscarEventos(categoria) {
    console.log(categoria);
    $('#publicacoes').html('Oops! Não há nenhum evento publicado!');
    // $.ajax({
    //     url: '../Controller/EventoController.class.php',
    //     type: 'GET',
    //     dataType: 'JSON',
    //     // beforeSend: mostrarModalAguardar,
    //     // complete: fecharModalAguardar,
    //     success: sucessoAoBuscarEventos,
    //     error: erroNaRequisicao
    // });
}

function sucessoAoBuscarEventos(response) {
    $('#publicacoes').html('');
    response.forEach(evento => {
        $('#publicacoes').append(`
            <div class="post">
                <p>Evento</p>
                <p class="conteudoPost">
                    ${evento.titulo}
                </p>
            </div>`);
    });
}

function buscarGuias(categoria) {
    console.log(categoria);
    $('#publicacoes').html('Oops! Não há nenhum guia publicado!');
    // $.ajax({
    //     url: '../Controller/GuiaController.class.php',
    //     type: 'GET',
    //     dataType: 'JSON',
    //     // beforeSend: mostrarModalAguardar,
    //     // complete: fecharModalAguardar,
    //     success: sucessoAoBuscarGuias,
    //     error: erroNaRequisicao
    // });
}

function sucessoAoBuscarGuias(response) {
    $('#publicacoes').html('');
    response.forEach(guia => {
        $('#publicacoes').append(`
            <div class="post">
                <p>Guia</p>
                <p class="conteudoPost">
                    ${guia.nomeDestino}
                </p>
            </div>`);
    });
}
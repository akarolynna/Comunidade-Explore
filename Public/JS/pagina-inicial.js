$(document).ready(
    function() {
        $('#categoriaTodos').addClass('categoriaAtiva');
        buscarPublicacoes();
    }
);

$('.itemCategoria').click(selecionarCategoria);
$('.itemMenuPublicacoes').click(selecionarTipoPublicacao);
$('#botaoPesquisa').click(buscarPublicacoes);

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
    let pesquisa = $('#inputPesquisa').val();
    switch(tipo) {
        case 'diarios':
            buscarPosts(categoria, pesquisa);
            break;
        case 'eventos':
            buscarEventos(categoria, pesquisa);
            break;
        case 'guias':
            buscarGuias(categoria, pesquisa);
            break;
        default:
            console.log('Erro ao buscar publicações: tipo de publicação inválido.');
    }
}

function buscarPosts(categoria, pesquisa) {
    $.ajax({
        url: `../Controller/PostController.class.php?categoria=${formatarCategoria(categoria)}&pesquisa=${pesquisa}`,
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
    $.isEmptyObject(response)
        ? $('#publicacoes').html('Oops! Não encontramos nenhum post com esses filtros.')
        : response.forEach(post => {
            $('#publicacoes').append(`
                <div class="post">
                    <p>Post</p>
                    <p class="conteudoPost">
                        ${post.conteudo}
                    </p>
                </div>`);
    });
}

function buscarEventos(categoria, pesquisa) {
    $.ajax({
        url: `../Controller/EventoController.class.php?categoria=${formatarCategoria(categoria)}&pesquisa=${pesquisa}`,
        type: 'GET',
        dataType: 'JSON',
        // beforeSend: mostrarModalAguardar,
        // complete: fecharModalAguardar,
        success: sucessoAoBuscarEventos,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarEventos(response) {
    $('#publicacoes').html('');
    $.isEmptyObject(response)
        ? $('#publicacoes').html('Oops! Não encontramos nenhum evento com esses filtros.')
        : response.forEach(evento => {
            $('#publicacoes').append(`
                <div class="post">
                    <p>Evento</p>
                    <p class="conteudoPost">
                        ${evento.titulo}
                    </p>
                </div>`);
    });
}

function buscarGuias(categoria, pesquisa) {
    $.ajax({
        url: `../Controller/GuiaController.class.php?categoria=${formatarCategoria(categoria)}&pesquisa=${pesquisa}`,
        type: 'GET',
        dataType: 'JSON',
        // beforeSend: mostrarModalAguardar,
        // complete: fecharModalAguardar,
        success: sucessoAoBuscarGuias,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarGuias(response) {
    $('#publicacoes').html('');
    $.isEmptyObject(response)
        ? $('#publicacoes').html('Oops! Não encontramos nenhum guia com esses filtros.')
        : response.forEach(guia => {
            $('#publicacoes').append(`
                <div class="post">
                    <p>Guia</p>
                    <p class="conteudoPost">
                        ${guia.nomeDestino}
                    </p>
                </div>`);
    });
}

function formatarCategoria(categoria) {
    return categoria.substring(9).toLowerCase();;
}
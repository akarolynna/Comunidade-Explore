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
    console.log(response);
    $('#publicacoes').html('');
    $.isEmptyObject(response)
        ? $('#publicacoes').html('Oops! Não encontramos nenhum post com esses filtros.')
        : response.forEach((post, index) => {
            buscarTituloDiarioViagem(post.diarioId, index);

            $('#publicacoes').append(`
                <div class="post">
                    <div class="imagemPost">
                        <img src="${post.imagens}" alt="Imagem do Post">
                    </div>
                    <div class="conteudoPost">
                        <div class="cabecalhoPost">
                            <div class="criadorPost">
                                <img src="../Public/Imagens/ImagemUsuario.png" alt="Foto do autor">
                                <p id="nomeCriador${index}"></p>
                            </div>
                            <p>${post.data}</p>
                        </div>
                        <h3 class="tituloPost mt-3" id="tituloPost${index}"></h3>
                        <p class="mt-3 descricaoPost">${post.conteudo}</p>
                        <div class="teste">
                            <i class="corCinzaClaro cursorPointer far fa-heart fa-lg"></i>
                            <p class="corCinzaClaro ml-2 mr-4">${post.numCurtidas}</p>
                            <i class="corCinzaClaro cursorPointer far fa-comment fa-lg"></i>
                            <p class="corCinzaClaro ml-2 mr-4">${post.numComentarios}</p>
                            <i class="corCinzaClaro cursorPointer far fa-bookmark fa-lg"></i>
                        </div>
                    </div>
                </div>
            `);
    });
}

function buscarTituloDiarioViagem(diarioId, postIndex) {
    $.ajax({
        url: `../Controller/DiarioController.class.php?diarioId=${diarioId}`,
        type: 'GET',
        dataType: 'JSON',
        success:  (response) =>{
            $(`#tituloPost${postIndex}`).html(response[0].titulo);
            buscarNomeCriador(response[0].criadorId, postIndex);
        },
        error: erroNaRequisicao
    });
}

function buscarNomeCriador(membroId, postIndex) {
    $.ajax({
        url: `../Controller/MembroController.class.php?membroId=${membroId}`,
        type: 'GET',
        dataType: 'JSON',
        success:  (response) =>{
            $(`#nomeCriador${postIndex}`).html(response[0].email);
        },
        error: erroNaRequisicao
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
                        ${guia.nome_destino}
                    </p>
                </div>`);
    });
}

function formatarCategoria(categoria) {
    return categoria.substring(9).toLowerCase();
}
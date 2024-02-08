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

            console.log(post.imagens);
            $('#publicacoes').append(`
                <div class="post">
                    <div class="imagemPost">
                        <img src="../Public/ImagensGuia/fotoCapa.png" alt="Imagem do Post">
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
        success: sucessoAoBuscarEventos,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarEventos(response) {
    console.log(response);
    $('#publicacoes').html('');
    $.isEmptyObject(response)
        ? $('#publicacoes').html('Oops! Não encontramos nenhum evento com esses filtros.')
        : response.forEach((evento, index) => {
            $('#publicacoes').append(`
                <div class="cardEvento" id="cardEvento${index}">
                    <div class="filtro">
                        <div class="cabecalho">
                            <h3 class="titulo">${evento.titulo}</h3>
                            <button class="btn botaoPrimario">Me inscrever</button>
                        </div>
                        <div class="conteudo">
                            <div class="tag criador">
                                <img src="../Public/Imagens/ImagemUsuario.png" alt="imagem usuário">
                                <p>Anna Karolynna</p>
                            </div>
                            <div class="infoEvento">
                                <div class="tag">
                                    <i class="far fa-calendar-alt"></i>
                                    <p>${evento.dataInicio}</p>
                                </div>
                                <div class="tag">
                                    <i class="far fa-clock"></i>
                                    <p>${evento.horaInicio} - ${evento.horaTermino}</p>
                                </div>
                                <div class="tag">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>${evento.localizacao}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `);
            $(`#cardEvento${index}`).css("background-image", `url('${evento.fotoCapa}')`);
    });
}

function buscarGuias(categoria, pesquisa) {
    $.ajax({
        url: `../Controller/GuiaController.class.php?categoria=${formatarCategoria(categoria)}&pesquisa=${pesquisa}`,
        type: 'GET',
        dataType: 'JSON',
        success: sucessoAoBuscarGuias,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarGuias(response) {
    console.log(response);
    $('#publicacoes').html('');
    $.isEmptyObject(response)
        ? $('#publicacoes').html('Oops! Não encontramos nenhum guia com esses filtros.')
        : response.forEach((guia, index) => {
            $('#publicacoes').append(`
                <div class="cardPublicacao cardImagem cardGuia" id="cardGuia${guia.id}" onclick="abrirDetalhesGuia(${guia.id})">
                    <div class="filtro">
                        <div class="cabecalho">
                            <h3 class="titulo">${guia.nomeDestino}</h3>
                            <button class="btn botaoPrimario">Seguir</button>
                        </div>
                        <div class="conteudo">
                            <div class="tag criador">
                                <img src="../Public/Imagens/ImagemUsuario.png" alt="imagem usuário" class="imagemUsuario">
                                <span>Anna Karolynna</span>
                            </div>
                            <div class="infoGuia">
                                <div class="tag">
                                    <i class="fas fa-users"></i>
                                    <span>469 seguidores</span>
                                </div>
                                <div class="tag">
                                    <i class="fas fa-hands-helping"></i>
                                    <span>8 colaboradores</span>
                                </div>
                            </div>
                            <div class="tag">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>${guia.localizacao}</span>
                            </div>
                        </div>
                    </div>
                </div>
            `);
            $(`#cardGuia${guia.id}`).css("background-image", `url('${guia.fotoCapa}')`);
    });
}

function formatarCategoria(categoria) {
    return categoria.substring(9).toLowerCase();
}

function abrirDetalhesGuia(guiaId) {
    window.location.href = `/Comunidade-Explore/View/detalhesGuia.php?guiaId=${guiaId}`;
}
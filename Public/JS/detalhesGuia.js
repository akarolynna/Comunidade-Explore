$(document).ready(buscarGuia);
$('#botaoEditar').click(abrirEdicaoGuia);
$('#botaoSeguir').click(seguirGuia);
let guiaId = 0;

function buscarGuia() {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    guiaId = searchParams.get('guiaId');

    $.ajax({
        url: `../Controller/GuiaController.class.php?guiaId=${guiaId}`,
        type: 'GET',
        dataType: 'JSON',
        success: sucessoAoBuscarGuia,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarGuia(response) {
    console.log(response);

    if (!$.isEmptyObject(response)) {
        $('#nomeDestino').html(response[0].nomeDestino);
        $('#localizacao').html(response[0].localizacao);
        $('#secaoCapa').css('background-image', `url("${response[0].fotoCapa}")`);
        $('#sobreTitulo').html(`Sobre ${response[0].nomeDestino}`);
        $('#descricao').html(`Sobre ${response[0].descricao}`);
        $('#clima').html(`Sobre ${response[0].clima}`);
        $('#epocaVisita').html(`Sobre ${response[0].epocaVisita}`);
        $('#culturaHistoria').html(`Sobre ${response[0].culturaHistoria}`);
        $('#tituloRodape').html(`Explore - ${response[0].nomeDestino}`);

        const fotos = JSON.parse(response[0].fotosSecundarias);
        let i = 0;
        fotos.forEach(foto => {
            i++;
            $(`#foto${i}`).attr("src", foto);
        });

        buscarDesafiosGuia(response[0].id, response[0].corPrincipal);
        // buscarColaboradores(response[0].id);
        buscarCriador(response[0].criadorId, response[0].id);

    } else {
        $('#publicacoes').html('Oops! Não encontramos esse guia.')
    }
}

function erroNaRequisicao(error) {
    console.log('ERRO');
    console.log(error);
    console.log(error.responseText);
}

function buscarDesafiosGuia(guiaId, corPrincipal) {
    $.ajax({
        url: `../Controller/GuiaController.class.php?guiaId=${guiaId}&acao=buscarDesafios`,
        type: 'GET',
        dataType: 'JSON',
        success: (response) => {
            if (!$.isEmptyObject(response)) {
                $('#desafiosContainer').html('');
                response.forEach((desafio, index) => {
                    classeDesafio = index % 2 == 0
                        ? 'desafioCanto customBorderColor customColor'
                        : 'desafioCentro customBackgroundColor';

                    $('#desafiosContainer').append(`
                        <div class="desafioContent ${classeDesafio}" onclick="abrirDetalhesDesafio(${desafio.id})">
                            <h3 class="desafioTitulo">${desafio.titulo}</h3>
                            <p class="desafioDescricao">${desafio.descricao}</p>
                        </div>
                    `);
                });
                personalizarCor(corPrincipal);
            } else {
                $('#painelDesafios').html('Esse guia não possui desafios');
            }
        },
        error: erroNaRequisicao
    });
}

function buscarCriador(criadorId, guiaId) {
    $.ajax({
        url: `../Controller/MembroController.class.php?membroId=${criadorId}`,
        type: 'GET',
        dataType: 'JSON',
        success: (response) => {
            buscarColaboradores(guiaId, response);
        },
        error: erroNaRequisicao
    });
}

async function sucessoAoBuscarCriador(response) {
    const membroId = await buscarIdMembroLogado();

    if (!$.isEmptyObject(response)) {
        $('#nomeCriador').html(response[0].email);
        $('#fotoCriador').attr('src', response[0].foto);
        if (response[0].id == membroId) {
            $('#botaoSeguir').css('display', 'none');
            $('#botaoEditar').css('display', 'block');
        } else {
            $('#botaoSeguir').css('display', 'block');
            $('#botaoEditar').css('display', 'none');
        }
    } else {
        $('#nomeCriador').html('Erro ao buscar nome');
    }
}

function buscarColaboradores(guiaId, responseCriador) {
    $.ajax({
        url: `../Controller/GuiaController.class.php?guiaId=${guiaId}&acao=buscarColaboradores`,
        type: 'GET',
        dataType: 'JSON',
        success: (responseColaborador) => {
            sucessoAoBuscarColaboradoresECriador(responseCriador, responseColaborador);
        },
        error: erroNaRequisicao
    });
}

async function sucessoAoBuscarColaboradoresECriador(responseCriador, responseColaborador) {
    if (!$.isEmptyObject(responseCriador) && !$.isEmptyObject(responseColaborador)) {
        const membroId = await buscarIdMembroLogado();

        $('#numeroColaboradores').html(responseColaborador.length);
        $('#colaboradoresContent').html('');
        let ehColaborador = false;
        responseColaborador.forEach((colaborador) => {
            if (colaborador.membroId == membroId) ehColaborador = true;
            buscarColaborador(colaborador.membroId);
        });

        $('#nomeCriador').html(responseCriador[0].email);
        $('#fotoCriador').attr('src', responseCriador[0].foto);
        if (responseCriador[0].id == membroId || ehColaborador) {
            $('#botaoSeguir').css('display', 'none');
            $('#botaoEditar').css('display', 'block');
        } else {
            $('#botaoSeguir').css('display', 'block');
            $('#botaoEditar').css('display', 'none');
        }
    } else {
        $('#colaboradoresContainer').html('');
        $('#nomeCriador').html('Erro ao buscar nome');
    }
}

async function sucessoAoBuscarColaboradores(response) {
    const membroId = await buscarIdMembroLogado();

    if (!$.isEmptyObject(response)) {
        $('#numeroColaboradores').html(response.length);
        $('#colaboradoresContent').html('');
        let ehColaborador = false;
        response.forEach((colaborador) => {
            if (colaborador.membroId == membroId) ehColaborador = true;
            buscarColaborador(colaborador.membroId);
        });
        if (ehColaborador) {
            $('#botaoSeguir').css('display', 'none');
            $('#botaoEditar').css('display', 'block');
        } else {
            $('#botaoSeguir').css('display', 'block');
            $('#botaoEditar').css('display', 'none');
        }
    } else {
        $('#colaboradoresContainer').html('');
    }
}

function buscarColaborador(colaboradorId) {
    $.ajax({
        url: `../Controller/MembroController.class.php?membroId=${colaboradorId}`,
        type: 'GET',
        dataType: 'JSON',
        success: sucessoAoBuscarColaborador,
        error: erroNaRequisicao
    });
}

function sucessoAoBuscarColaborador(response) {
    console.log(response);
    $('#colaboradoresContent').append(`
        <img src="${response[0].foto}" class="pessoaImagem" onclick="abrirPerfil(${response[0].id})">
    `);
}

function personalizarCor(corPrincipal) {
    $('.customBackgroundColor').css('background-color', corPrincipal);
    $('.customBorderColor').css('border', `1px solid ${corPrincipal}`);
    $('.customColor').css('color', corPrincipal);
}

function abrirEdicaoGuia() {
    window.location.href = `/Comunidade-Explore/View/cadastroGuia.php?guiaId=${guiaId}`;
}

function abrirDetalhesDesafio(desafioId) {
    console.log(desafioId);
}

function abrirPerfil(membroId) {
    console.log(membroId);
}

function seguirGuia() {
    let queryString = window.location.search;
    let searchParams = new URLSearchParams(queryString);
    let guiaId = searchParams.get('guiaId');

    $.ajax({
        dataType: "JSON",
        url: '../controller/GuiaController.class.php?_acao=seguir&guiaId=' + guiaId,
        type: "POST",
        success: (response) => {
            alert('Agora você está seguindo esta página!');
            window.location.reload();
        },
        error: (error) => {
            alert('Você já está seguindo essa página');
            console.log(error);
        }
    });
}

function buscarIdMembroLogado() {
    return new Promise(function (resolve, reject) {
        $.ajax({
            url: '../Controller/MembroController.class.php?_acao=membroLogado',
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                resolve(response);
            },
            error: function (error) {
                reject(error);
            }
        });
    });
}
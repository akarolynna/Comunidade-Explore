$(document).ready(buscarGuia);
$('#botaoEditar').click(abrirEdicaoGuia);
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

    if(!$.isEmptyObject(response)) {
        $('#botaoSeguir').css('display', 'none');
        $('#botaoEditar').css('display', 'block');

        $('#nomeDestino').html(response[0].nomeDestino);
        $('#localizacao').html(response[0].localizacao);
        $('#secaoCapa').css('background-image', `url("${response[0].fotoCapa}")`);
        $('#sobreTitulo').html(`Sobre ${response[0].nomeDestino}`);
        $('#descricao').html(`Sobre ${response[0].descricao}`);
        $('#clima').html(`Sobre ${response[0].clima}`);
        $('#epocaVisita').html(`Sobre ${response[0].epocaVisita}`);
        $('#culturaHistoria').html(`Sobre ${response[0].culturaHistoria}`);

        const fotos = JSON.parse(response[0].fotosSecundarias);
        let i = 0;
        fotos.forEach(foto => {
            i++;
            $(`#foto${i}`).attr("src", foto);
        });

        console.log(response[0].corPrincipal)
        buscarDesafiosGuia(response[0].id, response[0].corPrincipal);

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
                console.log(corPrincipal)
                personalizarCor(corPrincipal);
            } else {
                $('#painelDesafios').html('Esse guia não possui desafios');
            }
        },
        error: erroNaRequisicao
    });
}

function personalizarCor(corPrincipal) {
    console.log(corPrincipal)
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
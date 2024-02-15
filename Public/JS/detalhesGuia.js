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
        $('.customBackgroundColor').css('background-color', response[0].corPrincipal);
        $('.customBorderColor').css('border', `1px solid ${response[0].corPrincipal}`);
        $('.customColor').css('color', response[0].corPrincipal);

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

    } else {
        $('#publicacoes').html('Oops! Não encontramos esse guia.')
    }    
}

function erroNaRequisicao(error) {
    console.log('ERRO');
    console.log(error);
    console.log(error.responseText);
}

function abrirEdicaoGuia() {
    window.location.href = `/Comunidade-Explore/View/cadastroGuia.php?guiaId=${guiaId}`;
}